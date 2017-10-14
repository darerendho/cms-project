<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //To import the table user
class RegistrationsController extends Controller
{
    //

    public function create(){
            return view('registration.create');
    }

    public function store(){
        //Validate the registration
        $this->validate(request(),[
          'name' => 'required',
          'email'=> 'required|email',
          'password'=> 'required|confirmed'
        ]);
        //$password = request('password');
        //$hashpassword = bcrpyt($password);
        //Create abnd save the User
        $user = User::create([
          'name'=>request('name'),
          'email'=>request('email'),
          'password'=>bcrypt(request('password'))
        ]);
        //Sign the user in
        auth()->login($user);
        //redirect

        return redirect()->home();
    }
}
