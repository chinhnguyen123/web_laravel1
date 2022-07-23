<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//    public function  welcome($ten, $tuoi = '')
//    {
//        return view('welcome',  [
//            'ten'=>$ten,
//            'tuoi'=>$tuoi
//        ]);
//    }


    public function  form(){
        return view('form');
    }

    public function  post(Request  $rq){
        $a = $rq->get('a');
        //echo $a;
        return view('show', [
            'a'=>$a,
        ]);
    }
}
