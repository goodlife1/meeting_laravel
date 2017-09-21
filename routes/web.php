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
    return view('profile.edit');

});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\\IndexController@index');
    Route::group(['prefix' => 'forum'], function () {
        Route::get('/category', 'Admin\\ForumController@index');
    });

//    NOTIFICATION
//    $user = \App\User::find(1);
//    dd($user->notifications()->get());
//    $user->notify(new \App\Notifications\InvoiceToMeeting());


});


Route::get('auth/verification/{user_id}/{token}', "Auth\\RegisterController@emailVerification");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forum', 'ForumController@index')->name('forum');
