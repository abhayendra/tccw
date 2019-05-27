<?php

namespace App\Http\Controllers;

use App\Page;
use App\Testimonial;
use App\HomeSection;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $testimonial = Testimonial::all();
        $homeSection = HomeSection::where('status',1)->get();
        return view('frontend.home',compact('testimonial','homeSection'));
    }

    public function page($slug) {
        $pageData = Page::where('slug',$slug)
            ->first();
        return view('frontend.page',compact('pageData'));
    }
}
