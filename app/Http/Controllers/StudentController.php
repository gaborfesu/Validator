<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function myForm(Request $request){

        if( $request->isMethod("post")) {
            print_r( $request->all() );
        }

        return view("my_form");
    }

    public function submitStudent( Request $request){
        print_r($request->all() );
    }
}
