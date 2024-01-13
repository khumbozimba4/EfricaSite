<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function Index(){
        $WebServiceController = new WebServiceController();
        $response = $WebServiceController->GetAllBlogs();
        $blogs = json_decode($response, true);
        return view('blogs',compact('blogs'));
    }
    public function showBlog($slug){
        $WebServiceController = new WebServiceController();
        $response = $WebServiceController->GetBlogBySlug($slug);
        $blog = json_decode($response, true);
        $blogs = $blog["data"];
        $related = $blog["related"];
        return view('showblog',compact('blogs','related'));
    }
}
