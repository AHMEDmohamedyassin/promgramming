<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsAdminController extends Controller
{
    // public function __construct()          // المفروض إضافتها ليأخذ الصلاحية لكن هي لا تعمل عند إضافتها
    // {
    //     $this->middleware('MyMiddleware');
    // }

    public function index(){
        return 'You are subscriber';
    }
}
