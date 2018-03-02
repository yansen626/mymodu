<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function Home(Request $request){
        return View('frontend.home');
    }

    public function AboutUs(Request $request){
        return View('frontend.about-us');
    }

    public function AboutUsFacts(Request $request){
        return View('frontend.about-us-facts');
    }

    public function AboutUsLocation(Request $request){
        return View('frontend.about-us-location');
    }

    public function terms(){
        return View('frontend.terms');
    }

    public function contactUs(){
        return View('frontend.contact-us');
    }

    public function submitContactUs(Request $request){
        $name = Input::get('name');
        $email = Input::get('email');
        $description = Input::get('description');

        $data = new ContactUs($name, $email, $description);

        Mail::to('ferdyantorand@gmail.com')->send($data);

        Session::flash('message', 'Terima Kasih. Kami akan segera menghubungi Anda!');
        return View('frontend.contact-us');
    }
}
