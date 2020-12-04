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
    return view('aboutme');
});

Route::get('user/{u_id}', function($id){
    return view('userpage', ['id'=>$id]);
});

Route::get('post/{post_id}/comment/{comment_id}', function
($post_id, $comment_id){
    return view('postme', ['pid'=>$post_id, 'cid'=>$comment_id]);
});

// Route::get('student/{name?}', function($name = null){
//     return view('studentpage', ['name'=>$name]);
// });

Route::get('student/{name?}', function($name = 'Cinki'){
    return view('studentpage', ['name'=>$name]);
});

// using regex

Route::get('product/{p_name}', function($name){
    return view('productpage', ['pname'=>$name]);
})->where('p_name', '[A-Za-z]+');

Route::get('manager/{id}/{name}', function($id, $name){
    return view('managerpage', ['mid'=>$id, 'mname'=>$name]);
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);


// using Helper Method

Route::get('employee/{id}/{name}', function($id, $name){
    return view('employeepage', ['eid'=>$id, 'ename'=>$name]);
})->whereNumber('id')->whereAlpha('name');

Route::view('login','loginpage');
Route::view('register','registerpage');

Route::redirect('login', 'register');
Route::redirect('login', 'register', 301);
Route::permanentRedirect('yaha2', 'waha2');

Route::fallback(function(){
    return view('defaultpage');
});