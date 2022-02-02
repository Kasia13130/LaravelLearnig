<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome')->with([
            'something' => 'somethingElse',
            'lists' => [
            'Make product list',
            'Buy products',
            'Make dinner',
            'Washing dishes']
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    
}
