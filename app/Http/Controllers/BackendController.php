<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index_new;
use App\Models\contact_information;
use App\Models\employee;
use Illuminate\Support\Facades\Validator;

class BackendController extends Controller
{
    //


    public function contact_info()
    {

        $contact_info = contact_information::get();
        return view('backend.contact_info', compact('contact_info'));
    }

    public function news_list()
    {
        $news_data = index_new::get();
        return view('backend.news_list', compact('news_data'));
    }
    public function news_create()
    {

        return view('backend.news_create');
    }


    public function news_create_store(Request $request)
    {
        $img_name = $request->news_img_path->getClientOriginalName();
        $request->news_img_path->move(public_path('img/news'), $img_name);
        $img_path = 'img/news/' . $img_name;
        index_new::create(
            [
                'news_title' => $request->news_title,
                'news_content' => $request->news_content,
                'news_img_path' => $img_path,
            ]
        );

        return redirect('/admin/news_create');
    }



    public function employees_list()
    {
        $employees_data = employee::get();
        return view('backend.employees_list', compact('employees_data'));
    }

    public function employees_create()
    {

        return view('backend.employees_create');
    }
    public function employees_create_store(Request $request)
    {
        $img_name = $request->employees_img_path->getClientOriginalName();
        $request->employees_img_path->move(public_path('img/news'), $img_name);
        $img_path = 'img/news/' . $img_name;
        employee::create(
            [
                'employees_title' => $request->employees_title,
                'employees_content' => $request->employees_content,
                'employees_img_path' => $img_path,
            ]
        );

        return redirect('/admin/employees_create');
    }
}
