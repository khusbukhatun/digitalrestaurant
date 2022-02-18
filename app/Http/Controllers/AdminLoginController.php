<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login()
    {
      //  dd('working');
        return view('backend.admin.login');
    }

    public function submit(Request $request)
    {
       dd($request->all()); 
    }
}

