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

    $array = [1,2,3,4,5];
    $names = ['Matheus','Matheus','Matheus','Matheus','Mikael'];
    $name = "Mikael";
    return view('welcome', 
        [
            'namee' => $name,
            'array'=>$array,
            'names'=>$names 
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () { //Não necessitam ser iguais
    return view('products');
});