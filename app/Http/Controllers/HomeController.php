<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data=posts::all();
        return view('home',compact('data'));
    }
}
