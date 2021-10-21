<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('helloe');
        dd('helloe');
        dd('helloe');
        dd('helloe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $User = User::findorFail($id);

        if (!request('Current')) {
    

            if ($request->hasfile('img')) 
            {

                $file = $request->file('img');
                $destinationPath = 'images';
                $fullpath = $file->move($destinationPath,$file->getClientOriginalName());

                if($User->avatar)
                {
                    unlink($User->avatar);
                }
                $User->avatar = $fullpath;
            }

            $User->discription = request('discription');
            $User->name = request('name');

       // $User->password = Hash::make(request('password'));

         // dd($name);


        $User->save();

        return redirect ('/home');
        }

        else{       

// echo $User->password;
// echo Hash::make(request('Current'));
            //exit();
            if (Hash::check(request('Current'), $User->password)) 
            {
// dd("hel");
                $User->password = Hash::make(request('password'));
                $User->save();
                    // dd("he");

                return view('change_password', ['error' => 'Password Changed Successfully... ']);
            }
            else
            {

                return view('change_password', ['error' => 'Password Not Matched...']);
            }
        }
        $request->validate([
            'Current'=>'required',
            'password'=>'required|string|min:6|confirmed',
            'password_confirmation'=>'required|string|min:6|confirmed'
        ]);

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
    