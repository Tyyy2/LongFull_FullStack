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
        return view('backend.contact_info');
    }
}
