<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
            ->with('post_count', Post::all()->count())
            ->with('trashed_count', Post::onlyTrashed()->get()->count())
            ->with('user_count', User::all()->count())
            ->with('category_count', Category::all()->count());
    }
}
