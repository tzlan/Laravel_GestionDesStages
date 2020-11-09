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
*/ //

Route::get('/', function () {
    return view('view1');
});


Route::get('/message', function () {
    //return view('welcome');
 return '<div style="text-align: center;"><h1>Manges tes morts </h1></div>';
});



Route::get('/Pisseur', function(){

echo 'Pisse pas';
});



Route::get('/piotre/{nom}/{id}', function($nom,$id){


    return'<h1>Mon nom est  '.$nom.'  <br> Et mon id est  '.$id.'</h1>';
});



Route::get('1', function() { return 'Je suis la page 1 !'; });



Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');





//Route::get('{n}', function($n) {
//    return 'Je suis la page ' . $n . ' !';
//});
