<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	//白名單
    protected $fillable = [
        'title',
        'content',	//無法被網頁端input寫入，要用route.php中寫法來寫入
        'is_feature',
    ];

    //黑名單
    protected $guarded = ['*'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
