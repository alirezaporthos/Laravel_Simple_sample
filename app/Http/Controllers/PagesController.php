<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index(){
        $title='Welcome';
        return view('pages.index',compact('title'));
    }

    public function about(){
        $title ='About';
        return view('pages.about',compact('title'));
    }

    public function services(){
        $title='services';
        $services=['Programming', 'Web Design', 'SEO'];
        return view('pages.services', compact('title','services'));
    }
}
