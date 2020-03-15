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

Auth::routes();

Route::get('/home', function () {
    return view('master');
});
Route::get('', function () {
    return view('master');
});

// Please, Verify Your Email Address
// Auth::routes(['verify' => true]);

//  resource can (Create, Read, Update, Delete)
Route::get('/Details1', 'HomeController@index')->name('home');
Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');


Route::get('/Details2', 'HomeController@indexone')->name('Details');
Route::resource('/comment1','Comment1Controller');
// Route::resource('/repliesones','RepliesonesController');

Route::get('/Details3', 'HomeController@indexthree')->name('CommentAll.Comment3s');
Route::resource('/comment3','Comment3Controller');
// Route::resource('/repliesthrees','RepliesthreesController');

Route::get('/Details4', 'HomeController@indexfour')->name('CommentAll.Comment4s');
Route::resource('/comment4','Comment4Controller');
// Route::resource('/repliesfours','RepliesfoursController');

Route::get('/Details5', 'HomeController@indexfive')->name('CommentAll.Comment5s');
Route::resource('/comment5','Comment5sController');

Route::get('/Details6', 'HomeController@indexsix')->name('CommentAll.Comment6s');
Route::resource('/comment6','Comment6Controller');

Route::get('/Details7', 'HomeController@indexseven')->name('CommentAll.Comment7s');
Route::resource('/comment7','Comment7Controller');

Route::get('/Details8', 'HomeController@indexeight')->name('CommentAll.Comment8s');
Route::resource('/comment8','Comment8Controller');

Route::get('/Details9', 'HomeController@indexnine')->name('CommentAll.Comment9s');
Route::resource('/comment9','Comment9Controller');

Route::get('/Details10', 'HomeController@indexten')->name('CommentAll.Comment10s');
Route::resource('/comment10','Comment10Controller');

// Route::get('Add/Details', 'HomeController@index')->name('home');

// Route::get('/Rating', 'HomeController@indexRating')->name('homemas');
// Route::resource('/Ratings','RatingController');



// Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');


// Route::get('profile', function () {
//     return "this is profile";
// })->middleware('verified');



Route::get('/mas', function () {
    return view('homemas');
});

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('posts', 'HomeController@posts')->name('posts');
// Route::resource('like', 'PostsController');
