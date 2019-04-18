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
	$posts = App\Post::paginate(3);
  return view('posts.index', compact('posts'));
});

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

//---------------------------Posts--------------------------------------------//
// Route::get('/posts', 'PostsController@index');
// Route::get('/post/create', 'PostsController@create');
// //Route::get('/post/store', 'PostsController@store')->name('poststore');
// Route::get('/post/store', 'PostsController@store');

Route::resource('posts', 'PostsController');
Route::get('/posts/create', 'PostsController@create');
Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
Route::resource('comments', 'CommentsController');

//-------------------------Buy Recipe-----------------------------------------//
Route::get('/posts/recipe/{id}', 'PostsController@showRecipe')->name('showrecipe');
// Route::get('/paypal', 'PaypalController@index')->name('paypalform');

Route::get('/paypal', [
    'name' => 'paypalform',
    'uses' => 'PaypalController@index'
]);
