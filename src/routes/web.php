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
Route::get('{any}', function(){
    return view('layout');
})->where('any', '.*');

//これで検索すれば意味が出てくる。今は後回し 


// Route::get('/', 'App\Http\Controllers\HelloController@index');

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/test', 'App\Http\Controllers\HelloController@index');

