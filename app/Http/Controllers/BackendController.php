<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index_new;
use App\Models\contact_information;
use App\Models\employee;

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
        index_new::create(
            [
                'news_title' => $request->news_title,
                'news_content' => $request->news_content,

            ]
        );

        return redirect('/admin/news_editor');
    }
}
