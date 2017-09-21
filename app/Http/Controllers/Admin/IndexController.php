<?php

namespace App\Http\Controllers\Admin;

use App\ForumCategories;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $category = ForumCategories::all();
        return view('admin.index');
    }
}
