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
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/yummy', function () {
    return view('Yummy Yummy');
});
Route::get('lap-trinh/{monhoc}/{thoigian}',function ($monhoc,$thoigian){
    return "Khóa học lập trình :$monhoc lúc $thoigian";
});
Route::get('mon-an/{tendoan?}',function ($tendoan="noodel"){
    return  "$tendoan";
});

Route::get('thongtin','wellcome@hieu');
Route::get('thongtin1','wellcome@phamhieu');
// view
Route::get('goi-view',function (){
    return view('listfile.thongtin');
});
// view share cho tất cả các view
View::share('title','httt');
// view composer cho trang chỉ định
View::composer(['listfile.thongtin'],function (){

});

