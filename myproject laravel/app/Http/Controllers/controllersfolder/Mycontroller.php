<?php

namespace App\Http\Controllers\controllersfolder; // معدلة

use Illuminate\Http\Request;

use Illuminate\Routing\Controller; // مضافة 

class Mycontroller extends Controller
{
    public function view ($code = null){
        return 'view methode from mycontroller the code is : ' . $code;
    }

    public function contact($str){

        // $arr = array(
        //     'str'  => $str
        // );

        // return view('contact')->with($arr);
        $lang = [];
        $lang = array('html' , 'css' , 'js' , 'php');
        
        return view('contact' , compact('str' , 'lang'));
    }
}
