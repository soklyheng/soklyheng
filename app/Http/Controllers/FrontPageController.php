<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view("front_home");
    }

    public function about(){
        $data ['title']="About Us";
        return view("front-about",$data);
    }

    public function service(){
        $data ['title']="Services";
        return view("front-service",$data);
    }

    public function package(){
        $data ['title']="Package";
        return view("front-package",$data);
    }

    public function destination(){
        $data ['title']="Destination";
        return view("front-destination",$data);
    }
    public function booking(){
        $data ['title']="Booking";
        return view("front-booking",$data);
    }
    public function guides(){
        $data ['title']="Guides";
        return view("front-guides",$data);
    }
    public function testimonial(){
        $data ['title']="Testimonial";
        return view("front-testimonial",$data);
    }
    public function contact(){
        $data ['title']="Contact Us";
        return view("front-contact",$data);
    }
}
