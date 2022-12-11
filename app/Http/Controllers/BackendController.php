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

    public function news_editor($id)
    {
        $news_data = index_new::find($id);
        return view('backend.news_editor', compact('news_data'));
    }

    public function news_create_update(Request $request, $id)
    {

        if ($request->hasfile('news_img_path')) {
            $img_name = $request->news_img_path->getClientOriginalName();
            $request->news_img_path->move(public_path('img/news'), $img_name);
            $img_path = 'img/news/' . $img_name;
            index_new::find($id)->update(['news_img_path' => $img_path]);
        }

        if ($request->filled('news_title')) {
            index_new::find($id)->update(['news_title' => $request->news_title]);
        }
        if ($request->filled('news_content')) {
            index_new::find($id)->update(['news_content' => $request->news_content]);
        }

        return redirect('/admin/news_list');
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
        $request->employees_img_path->move(public_path('img/employees'), $img_name);
        $img_path = 'img/employees/' . $img_name;
        employee::create(
            [
                'employees_title' => $request->employees_title,
                'employees_content' => $request->employees_content,
                'employees_img_path' => $img_path,
            ]
        );

        return redirect('/admin/employees_create');
    }

    public function employees_editor($id)
    {
        $employees_data = employee::find($id);
        return view('backend.employees_editor', compact('employees_data'));
    }

    public function employees_create_update(Request $request, $id)
    {

        if ($request->hasfile('employees_img_path')) {
            $img_name = $request->employees_img_path->getClientOriginalName();
            $request->employees_img_path->move(public_path('img/employees'), $img_name);
            $img_path = 'img/employees/' . $img_name;
            employee::find($id)->update(['employees_img_path' => $img_path]);
        }

        if ($request->filled('employees_title')) {
            employee::find($id)->update(['employees_title' => $request->employees_title]);
        }
        if ($request->filled('employees_content')) {
            employee::find($id)->update(['employees_content' => $request->employees_content]);
        }

        return redirect('/admin/employees_list');
    }
}
