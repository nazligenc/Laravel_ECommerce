<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        echo "Index Function";
    }
    public function test(){
        return view('home.test');
    }
    public function user(){
        return view('home.user');
    }
    public function save(Request $request){
        return view('home.user',
        [
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname')
        ]);

    }





    public function param($id,$number){
      //  echo "Parameter 1:",$id;
       //  echo "<br>Parameter 2:",$number;
       //  echo "<br>Sum:",$id+$number;
        return view('home.test2',
        [
            'id'=>$id,
            'number'=>$number
        ]);



    }
}
