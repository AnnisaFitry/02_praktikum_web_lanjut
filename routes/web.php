<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return "Selamat Datang";
});
Route::get('/about', function () {
    return "2041720123-annisafy-2B";
});
Route::get('/articles/{id}', function ($id) {
    echo "Anda berada di halaman artikel ke ".$id;
});
Route::get('/HomeController', [PageController::class,'HomeController']);
Route::get('/AboutController', [PageController::class,'AboutController']);
Route::get('/ArticleController/{id}', [PageController::class,'ArticleController']);
