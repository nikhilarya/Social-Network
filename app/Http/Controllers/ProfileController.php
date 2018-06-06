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

    public function editProfile()
    {
    	$data = Auth::user()->profile;
    	return view('profile.editProfile', compact('data'));
    }

    public function uploadPhoto(Request $request)
    {
    	$file = $request->file('pic');
    	$filename = $file->getClientOriginalName();
    	$destinationPath = public_path('img');
    	// dd($destinationPath);
    	$file->move($destinationPath, $filename);

    	$user_id = Auth::user()->id;
    	DB::table('users')
            ->where('id', $user_id)
            ->update(['pic' => $filename]);

        return back();
    }

    public function updateProfile(Request $request)
    {
    	//dd($request->all());
    	$user_id = Auth::user()->id;
    	DB::table('profiles')->where('user_id' , $user_id)->update($request->except('_token'));

    	return back();
    }

     public function findFriends()
    {
    	$data = Auth::user()->profile;
    	$uid = Auth::user()->id;
    	$allUsers = DB::table('profiles')->leftJoin('users','users.id', '=' , 'profiles.user_id')->where('users.id' , '!=' , $uid)->get();
    	//dd($allUsers);
    	return view ('profile.findFriends', compact(['data', 'allUsers']));
    }

    public function sendRequest($id)
    {
    	return Auth::user()->addFriend($id);
    }
}
