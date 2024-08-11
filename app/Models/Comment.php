<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'content',
        'parent_id'
        // được sử dụng để tương tác với cơ sở dữ liệu
    ];
    public function post(){    // n-1
        return $this->belongsTo(Post::class);
    }
    public function parent(){        // n-1
        return $this->belongsTo(Comment::class, 'parent_id');
    }
    public function user(){          // n-1
        return $this->belongsTo(User::class);
    }
    public function replies(){      // 1-n
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
