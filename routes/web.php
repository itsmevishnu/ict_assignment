<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. h
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page');
});

Route::resource('ictapp','ICTAppController');

// for options
Route::get('/options', function(){
	return view('update_option');
})->name('options');

// for ug nominee
Route::get('ug-nominee','ICTAppController@ugNomineeList' )->name('ug_nominee');

// for facad
Route::get('facad','ICTAppController@facadList' )->name('facad');

// for SAC office
Route::get('sac-office','ICTAppController@sacList' )->name('sac');

// for dean
Route::get('dean','ICTAppController@deanList' )->name('dean');

// for account section
Route::get('account','ICTAppController@accountList' )->name('account');