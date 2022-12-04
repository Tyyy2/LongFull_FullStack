<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.aboutUs');
    }
    public function benefits()
    {
        return view('frontend.benefits');
    }
    public function benefitsDetail()
    {
        return view('frontend.benefitsDetail');
    }
    public function contactUs()
    {
        return view('frontend.contactUs');
    }
    public function newsDetail()
    {
        return view('frontend.newsDetail');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function serviceDetail()
    {
        return view('frontend.serviceDetail');
    }
}
