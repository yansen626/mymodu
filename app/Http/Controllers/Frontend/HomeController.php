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

    public function Video(){
        return View('frontend.videos');
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

    public function ourCustomers(){
        return View('frontend.our-customers');
    }

    public function submitContactUs(Request $request){
        $name = Input::get('name');
        $email = Input::get('email');
        $description = Input::get('description');

        $data = new ContactUs($name, $email, $description);

        Mail::to('msi@modu-system.co.id')->send($data);

        Session::flash('message', 'Terima Kasih. Kami akan segera menghubungi Anda!');
        return View('frontend.contact-us');
    }

    public function article($page)
    {
        if($page == 'belt'){
            return View('frontend.article-belt');
        }
        if(strpos( $page, 'M' ) !== false ){
            $footer = "aluminium";
            if($page == 'M63'){
                $title = 'MS2 (63mm)';
                $image = '63M';
                $pdfName = 'MS2';
            }
            else if($page == 'M83'){
                $title = 'MM3 (83mm)';
                $image = '83M';
                $pdfName = 'MM3';
            }
            else if($page == 'M140'){
                $title = 'ML2 (140mm)';
                $image = '140M';
                $pdfName = 'ML2';
            }
            else if($page == 'M220'){
                $title = 'MX2 (220mm)';
                $image = '220M';
                $pdfName = 'MX2';
            }
        }
        else{
            $footer = "stainless";
            if($page == 'D63'){
                $title = 'DS2 (63mm)';
                $image = '63D';
                $pdfName = 'DS2';
            }
            else if($page == 'D83'){
                $title = 'DM3 (83mm)';
                $image = '83D';
                $pdfName = 'DM3';
            }
            else if($page == 'D140'){
                $title = 'DL2 (140mm)';
                $image = '140D';
                $pdfName = 'DL2';
            }
            else if($page == 'D220'){
                $title = 'DX2 (220mm)';
                $image = '220D';
                $pdfName = 'DX2';
            }
        }

        return View('frontend.article-reuse', compact('title', 'image', 'pdfName', 'footer'));
    }

    public function product($product)
    {
        if($product == 'aluminium')
        {
            $footer = 'aluminium';
            return View('frontend.product-aluminium', compact('footer'));
        }
        else if($product == 'stainless')
        {
            $footer = 'stainless';
            return View('frontend.product-stainless', compact('footer'));
        }
        else if($product == 'gripper')
        {
            return View('frontend.product-gripper');
        }
        else if($product == 'alpine')
        {
            return View('frontend.product-alpine');
        }
        else if($product == 'accumulation')
        {
            return View('frontend.product-accumulation');
        }
        else if($product == 'sushi')
        {
            return View('frontend.product-sushi');
        }
    }

    public function industrialSolution(){
        return View('frontend.industrial-solution');
    }

    public function industrialFood(){
        return View('frontend.industrial-food');
    }

    public function industrialTeaBag(){
        return View('frontend.industrial-teabag');
    }

    public function industrialCarton(){
        return View('frontend.industrial-carton');
    }

    public function industrialPharmacy(){
        return View('frontend.industrial-pharmacy');
    }

    public function industrialPaper(){
        return View('frontend.industrial-paper');
    }

    public function industrialElectric(){
        return View('frontend.industrial-electric');
    }

    public function industrialOptical(){
        return View('frontend.industrial-optical');
    }

    public function industrialCan(){
        return View('frontend.industrial-can');
    }

    public function industrialAutomotive(){
        return View('frontend.industrial-automotive');
    }

    public function industrialPuck(){
        return View('frontend.industrial-puck');
    }

    public function industrialTobacco(){
        return View('frontend.industrial-tobacco');
    }

    public function Downloads(){
        return View('frontend.downloads');
    }

    public function DownloadFile($filename)
    {
        $file_path = public_path('files/'.$filename);
        return response()->download($file_path);
    }
}
