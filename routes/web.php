<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Models\Files;
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
Route::get('/',[UserController::class,'index_connection'])->name('login');
Route::post('/',[UserController::class,'connection']);
Route::get('/inscription',[UserController::class,'index_inscription'])->name('inscription');
Route::post('/inscription',[UserController::class,'inscription']);
Route::get('/accueil',[UserController::class,'index_accueil'])->name('accueil');
Route::get('/message_index',[MessageController::class,'index'])->name('message');
Route::post('/message',[FileController::class,'receive']);
Route::get('download',[FileController::class,'download']);
// Route::get('/message_index',function(){});