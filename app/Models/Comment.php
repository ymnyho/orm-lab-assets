<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';

    protected $fillable = [
        'name',
        'email',
        'content',
    ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
