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
    if(Auth::guest()) {
        return view('welcome');
    }else{
        return redirect("/userAccounts");
    }
});


Route::resource('userAccounts', 'UserAccountController');
Route::group(["middleware" => ["has_account"]], function(){
    Route::resource('settings', 'SettingController');
    Route::resource('actionScores', 'ActionScoreController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



;

