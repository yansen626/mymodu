<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function Home(Request $request){
        return View('frontend.home');
    }

    public function ContactUs(Request $request){
        return View('frontend.contact-us');
    }

    public function AboutUs(Request $request){
        return View('frontend.about-us');
    }

    public function terms(){
        return View('frontend.terms');
    }
}
