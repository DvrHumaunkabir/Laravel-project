<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller{

function welcome(Request $request){
    
    return view("home.welcome");
}


    function index(Request $request){
       // return response("Hello Humaun");
       $contex=[
        'name'=>'hello world',
        'color'=>'green',
        'days'=>['saturday','sunday','monday','tuesday','wednesday','thursday','friday'
       ]];
       return view("home.index",$contex);
    }
    //
}
