<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

        $title = "Dashboard";
        return view("admin.page.dashboard.index",compact(
            'title'
        ));     
        // render ra giao diện
    }
}
