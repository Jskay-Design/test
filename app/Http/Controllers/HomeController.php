<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function about(){
        return view("page.about");
    }
    public function contact(){
        return view("page.contact");
    }
    public function project(){
        return view("page.project");
    }
}
