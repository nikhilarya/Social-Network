<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
    	$file = $request->file('pic');
    	$filename = $file->getClientOriginalName();
    	$destinationPath = public_path('img');
    	$file->move($destinationPath, $filename);

    	$user_id = Auth::user()->id;
    	DB::table('users')
            ->where('id', $user_id)
            ->update(['pic' => $filename]);

        return back();
    }
}
