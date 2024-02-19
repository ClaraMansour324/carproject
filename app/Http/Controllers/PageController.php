<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Car;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function blog()
    {
        return view("blog");
    }

    public function contact()
    {
        return view("contact");
    }

    public function listing()
    {
        return view("listing");
    }

    public function singleBlog()
    {
        return view("single");
    }

    public function testimonial()
    {
        return view("testimonial");
    }

}
