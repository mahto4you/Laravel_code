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
    return view('welcome');
});

// Route::get('contact', function (){
//     return view('contactme', ['name'=>'Nitish']);
// });

// Route::view('contact', 'contactme', ['name'=>'Nitish']);

// Route::get('contact', function (){
//     return view('contactme', ['name'=>'Nitish','roll'=>101]);
// });

Route::view('contact', 'contactme', ['name'=>'Nitish','roll'=>101]);

Route::get('prof', function (){
    return view('profile')->with('name','Sonam');
});
