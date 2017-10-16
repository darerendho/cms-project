<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegistrationForm;

class RegistrationsController extends Controller
{
    //

    public function create(){
            return view('registration.create');
    }

    public function store(RegistrationForm $form){    //Validation pass to Form Request C

        $form->persist();

        session()->flash('message','Thanks so much for signing up.');


        return redirect()->home();
    }
}
