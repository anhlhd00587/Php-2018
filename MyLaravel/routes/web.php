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

Route::get('/home', function () {
    return view('home');
});

 /*Route::get('/text', function (\Illuminate\Http\Request $request) {
    $ten = $request -> input ('ten');
    $ho = $request -> input ('ho');
    return $ten . ''.$ho;


});
 */

Route::get('/product/create', 'ProductController@create');
Route::post('/product/list', 'ProductController@save');
