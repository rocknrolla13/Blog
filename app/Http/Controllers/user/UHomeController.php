<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;
use App\Models\tag;

class UHomeController extends Controller
{
    public function index()
    {
        $posts = post::where('status',1)->paginate(5);
        return view("user.blog",compact("posts"));
    }

    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));
    }
}
