<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //白名單
    // protected $fillable = [
    //     'title',
    //     'content',	//無法被網頁端input寫入，要用route.php中寫法來寫入
    //     'is_feature',
    // ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

}

