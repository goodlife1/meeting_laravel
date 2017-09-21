<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    protected $table = 'forum_post';
    protected $fillable = [
        'forum_discusion_id',
        'user_id',
        'body'
    ];
}
