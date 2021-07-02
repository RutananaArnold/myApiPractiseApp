<?php

namespace App\Http\Controllers\Dd_trial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trial;

class SignupController extends Controller
{
    function register(Request $request){
       
        $register = new trial;
        $register->firstname = $request->firstname;
        $register->lastname = $request->lastname;
        $register->age = $request->age;
       
        $register->save();
    }

    function retrieve(){
      return trial::all();
     
    }

    function search($id = 1){
      return trial::pluck('age');
    }
}
