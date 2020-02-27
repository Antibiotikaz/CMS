<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs/create', 'BlogsController@create');
Route::post('/blogs', 'BlogsController@store');
Route::get('blogs/{blog}', 'BlogsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home/{blogs}', function ($id) {
//
//   $blog =  App\Blog::findOrFail($id);
//   if($blog->user_id == auth()->id()){
//       return $blog;
//    }
//   return "Only the owner can see his note.";
// });
