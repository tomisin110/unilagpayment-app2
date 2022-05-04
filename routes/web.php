<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/redirects', [HomeController::class, "index"]);
Route::get('/users', [AdminController::class, "users"]);
Route::get('/allnews', [AdminController::class, "allnews"]);
Route::get('/usernews', [HomeController::class, "usernews"]);
Route::get('/payment', [HomeController::class, "payment"]);
Route::get('/fullusernews/{id}', [HomeController::class, "fullusernews"]);
Route::get('/create_news', [AdminController::class, "createnews"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);
Route::get('/deletenews/{id}', [AdminController::class, "deletenews"]);
Route::get('/updateuser/{id}', [AdminController::class, "updateuser"]);
Route::get('/updatenews/{id}', [AdminController::class, "updatenews"]);
Route::post('/editnews/{id}', [AdminController::class, "editnews"]);
Route::get('/fullnews/{id}', [AdminController::class, "fullnews"]);
Route::post('/edituser/{id}', [AdminController::class, "edituser"]);
Route::post('/upload_news', [AdminController::class, "uploadnews"]);
Route::get('/verify-payment/{reference}', [HomeController::class, "verify"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
