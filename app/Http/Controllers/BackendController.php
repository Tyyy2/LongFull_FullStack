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


    public function news_editor()
    {

        return view('backend.news_editor');
    }

    public function news_editor_store(Request $request)
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

        return redirect('/admin/news_editor');
    }
}
