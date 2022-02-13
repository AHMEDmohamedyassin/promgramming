<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    public function first(){
        return 'ahmed';
    }
    public function view($id , $name , $age){
        $data=array();
        $data['id'] = $id;
        $data['name'] = $name;
        $data['age'] = $age;
        return view('ahmedview' , $data);
    }
    public function viewbootstrap(){
        return view('bootstrapland');
    }
}
