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
Auth::routes();
/* Route::group(['middleware' => ['auth','admin']],function(){
       
    Route::get('/home',function(){
        return view('home');
    });
}); */

 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');



Route::prefix('students')->group(function () {
    Route::get('index','StudentController@index');
    Route::get('create','StudentController@create');
    Route::post('store','StudentController@store');
    Route::get('show','StudentController@show');
    Route::get('edit/{id}','StudentController@edit');
    Route::put('update/{id}','StudentController@update');
    Route::post('/delete/{id}','StudentController@destroy');

});

Route::prefix('sections')->group(function () {
    Route::get('index','SectionController@index');
    Route::get('create','SectionController@create');
    Route::post('store', 'SectionController@store');
    Route::get('show', 'SectionController@show');
    Route::get('edit/{id}','SectionController@edit');
    Route::put('update/{id}','SectionController@update');
    Route::post('/delete/{id}','SectionController@destroy');
});

Route::prefix('countries')->group(function () {
    Route::get('index','CountryController@index');
    Route::get('create','CountryController@create');
    Route::post('store', 'CountryController@store');
    Route::get('show', 'CountryController@show');
    Route::get('edit/{id}','CountryController@edit');
    Route::put('update/{id}','CountryController@update');
    Route::post('/delete/{id}','CountryController@destroy');
});