<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index_new;
use App\Models\contact_information;
use App\Models\employee;

class IndexController extends Controller
{
    //

    public function index()
    {
        $news_database = index_new::get();

        return view('frontend.index', compact('news_database'));
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


    public function newsDetail($id)
    {
        $newsDetail_database = index_new::find($id);

        return view('frontend.newsDetail', compact('newsDetail_database'));
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
