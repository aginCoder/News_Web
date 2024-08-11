<?php
// ===================Admin=============================================
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\CommentController;

// ===================Client=============================================
use App\Http\Controllers\client\TinController;

//Auth
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\User;
//middleware
use App\Http\Middleware\AuthMiddleware; // dùng cho tất cả các trang còn lại trong
use App\Http\Middleware\CheckLoginAdminMiddleware; //dùng cho trang login

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// ===============================BREZZE============================
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// ===============================END-BREZZE============================


// Test role ---------------------------------------------------------------------------
Route::get('/create_role', function () {
    $role = Role::create(['name' => 'Tác giả']);
    return 'Tạo role thành công';
});
Route::get('/create_permission', function () {
    Permission::create([
        'name' => 'view role',
    ]);
    Permission::create([
        'name' => 'create role',
    ]);
    Permission::create([
        'name' => 'edit role',
    ]);
    Permission::create([
        'name' => 'delete role',
    ]);

    return 'Tạo quyền thành công';
});
Route::get('/add_permission_to_role/{id}', function ($id) {
    $role = Role::findById(1);
    $permission = Permission::findById($id);
    $role->givePermissionTo($permission);
    return "Thêm quyền '$permission->name' cho role thành công";
});
Route::get('/add_role_to_user/{id}', function ($id) {
    $user = User::find($id);
    $user->assignRole('admin');
    return "Thêm quyền cho admin thành công";
});
Route::get('/check_role_user/{id}', function ($id) {
    $user = User::find($id);
    return  $user->roles;
});
// ADMIN =================================================================================================

// Authen ---------------------------------------------------------------------------
Route::get('/admin/login', [LoginController::class, 'index'])
    ->name('admin.login.index');
    Route::get('/admin/register', [LoginController::class, 'index'])
    ->name('admin.register.index');
Route::post('/admin/doLogin', [LoginController::class, 'login'])->name('admin.login.doLogin');
Route::get('/admin/doLogout', [LoginController::class, 'doLogout'])->name('admin.doLogout');

// Dashboard ---------------------------------------------------------------------------
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard')->middleware('AuthVip');

// User ---------------------------------------------------------------------------
Route::prefix('admin/user')->middleware('AuthVip')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.user')->middleware('Permission:view user');
    Route::get('/create', [UserController::class, 'create'])->name('admin.user.create')->middleware('Permission:create user');
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store')->middleware('Permission:create user');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit')->middleware('Permission:edit user');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update')->middleware('Permission:edit user');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete')->middleware('Permission:delete user');
});
// Category ---------------------------------------------------------------------------
Route::prefix('admin/category')->middleware('AuthVip')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.category')->middleware('Permission:view category');
    Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create')->middleware('Permission:create category');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store')->middleware('Permission:create category');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit')->middleware('Permission:edit category');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update')->middleware('Permission:edit category');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete')->middleware('Permission:delete category');
})->middleware(AuthMiddleware::class);
// Post ---------------------------------------------------------------------------
Route::prefix('admin/post')->middleware('AuthVip')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('admin.post')->middleware('Permission:view post');
    Route::get('/create', [PostController::class, 'create'])->name('admin.post.create')->middleware('Permission:create post');
    Route::post('/store', [PostController::class, 'store'])->name('admin.post.store')->middleware('Permission:create post');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit')->middleware('Permission:edit post');
    Route::post('/update/{id}', [PostController::class, 'update'])->name('admin.post.update')->middleware('Permission:edit post');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete')->middleware('Permission:delete post');
})->middleware(AuthMiddleware::class);
// ------------------------------Approve---------------------------------------------
Route::prefix('admin/approve-post')->group(function () {
    Route::get('/', [PostController::class, 'indexApprove'])->name('admin.approve-post');
    Route::get('/view-post/{slug}', [PostController::class, 'viewApprove'])->name('admin.approve-post.view');
    Route::get('/status-post/{id}/{status}', [PostController::class, 'statusApprove'])->name('admin.approve-post.status');
});
// Role ---------------------------------------------------------------------------
Route::prefix('admin/role')->middleware('AuthVip')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('admin.page.role')->middleware('Permission:view role');
    Route::get('/create', [RoleController::class, 'create'])->name('admin.page.role.create')->middleware('Permission:create role');
    Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store')->middleware('Permission:create role');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.page.role.edit')->middleware('Permission:edit role');
    Route::post('/update/{id}', [RoleController::class, 'update'])->name('admin.role.update')->middleware('Permission:edit role');
    Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('admin.role.delete')->middleware('Permission:delete role');
});
// CLIENT =================================================================================================
Route::prefix('/')->group(function () {
    Route::get('', [TinController::class, 'index'])->name('client.layouts.index');
    Route::get('/tin', [TinController::class, 'tin'])->name('client.layouts.page.loaiTin.tin');
    Route::get('/loaitin/{slug}', [TinController::class, 'loaitin'])->name('client.layouts.page.loaitin');
    Route::get('/tin/{slug}', [TinController::class, 'ctt'])->name('client.layouts.page.chiTietTin.components.ctt');
    Route::get('/edit/{id}', [TinController::class, 'edit'])->name('client.post.edit');
});
Route::post('/comment', [CommentController::class, 'store'])->name('comment');
Route::post('/commentUpdate', [CommentController::class, 'update'])->name('comment.update');
// // Search ---------------------------------------------------------------------------
Route::post('/search', [TinController::class, 'timKiem'])->name('timkiem');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::get('/delete/{id}', [CommentController::class, 'delete'])->name('admin.comment.delete');
Route::post('/comments/{id}/reply', [CommentController::class, 'reply'])->name('comments.reply');
