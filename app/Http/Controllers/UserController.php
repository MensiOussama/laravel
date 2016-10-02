<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\User;
use Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        //return view('boook.index',compact('boooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
         $user=Request::all();
         User::create($user);
        // return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user=User::find($id);
      //return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        //return view('user/edit',compact('user'));
        return view('user.edit',compact('user'));
    }

     public function modifUser($id)
    {
        $user=User::find($id);
        //return view('user/edit',compact('user'));
        return view('user.modifuser',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
         $userUpdate=Request::all();
         $user=User::find($id);
         $user->update($userUpdate);
         return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
       // return redirect('users');
    }

    public function affiche_git()
    {
        
    }
    public function getUsers(Request $request){
       // $users=User::all();
        $json = file_get_contents('http://192.168.83.162/api/v3/projects?private_token=HGKNYN8VsWuaWyzYTFzz');
        $obj = json_decode($json);
        return response()->json($obj);
    }
}