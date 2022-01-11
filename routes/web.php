<?php

use Illuminate\Support\Arr;
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

Route::get('/array', function () {
    $array = [1, 3, 5, 7, 9];

 $k=2;
 if($k==1){
 echo $array[4].','.$array[0].','.$array[1].','.$array[2].','.$array[3]."<br>";
 }
 elseif($k==2)
 {
 echo $array[3].','.$array[4].','.$array[0].','.$array[1].','.$array[2]."<br>";
 }
});
