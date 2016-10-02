<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('profile');
    }

     public function modifUser($id)
    {
        $user=User::find($id);
        //return view('user/edit',compact('user'));
        return view('user.mod',compact('user'));
    }

   /* public function uploadphoto(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 300)->save( public_path('/photo/' . $filename ) );
            $user = Auth::user();
            $user->photo = $filename;
            $user->save();
        }
    
}*/
}