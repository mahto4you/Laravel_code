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

Route::get('about', function(){
    return "Hello World";
});

Route::get('user/{u_id}', function($id){
    return $id;
});

Route::get('post/{post_id}/comment/{comment_id}', function
($post_id, $comment_id){
    return "Post ID: " . $post_id."<br>". "Comment ID: ". $comment_id;
});

// Route::get('student/{name?}', function($name = null){
//     return "Hello" . $name;
// });

Route::get('student/{name?}', function($name = 'Cinki'){
    return "Hello" . $name;
});

// using regex

Route::get('product/{p_name}', function($name){
    return "Product Name: " . $name;
})->where('p_name', '[A-Za-z]+');

Route::get('manager/{id}/{name}', function($id, $name){
    return "Manager ID: " .$id . "<br>". "Manager Name: ". $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);


// using Helper Method

Route::get('employee/{id}/{name}', function($id, $name){
    return "Employee ID: ". $id ."<br>". "Employee Name: " . $name;
})->whereNumber('id')->whereAlpha('name');

Route::redirect('yaha', 'waha');
Route::redirect('yaha', 'waha', 30);
Route::permanentRedirect('yaha2', 'waha2');

Route::fallback(function(){
    return "Default Message";
});