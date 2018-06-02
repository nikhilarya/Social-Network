<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($slug)
    {	
    	return view ('profile.index');
    }

    public function changePhoto()
    {
    	
    }

    public function uploadPhoto(Request $request)
    {
    	dd($request);
    }
}
