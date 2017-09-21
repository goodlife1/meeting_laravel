<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumCategories extends Model
{
    protected $table = 'forum_categories';
    protected $fillable = [
            'name',
            'color',
            'slug'
        ];
}
