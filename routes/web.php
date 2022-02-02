<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $lists = [
    //     'Make product list',
    //     'Buy products',
    //     'Make dinner',
    //     'Washing dishes'
    // ];

    return view('welcome')->with([
        'something' => 'somethingElse',
        'lists' => [
        'Make product list',
        'Buy products',
        'Make dinner',
        'Washing dishes']
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});