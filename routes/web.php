<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DRCLateksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubKriteria;
use App\Http\Controllers\Tambahdatakriteria;
use App\Http\Controllers\VFAController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/','login');

Route::get('/',[LoginController::class,'index'])->name('/');
Route::post('/postlogin',[LoginController::class,'postlogin']);
Route::get('register',[LoginController::class,'register']);
Route::post('/postregistration',[LoginController::class,'postregistrationn']);
Route::get('/login', [DashboardController::class, 'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/datakriteria',[Tambahdatakriteria::class,'datakriteria']);
Route::post('/tambahdatakriteria',[Tambahdatakriteria::class,'add']);
Route::get('/delete/{id}',[Tambahdatakriteria::class,'delete']);
Route::get('/edit/{id}',[Tambahdatakriteria::class,'edit']);
Route::post('/edit/{id}',[Tambahdatakriteria::class,'update']);
Route::get('/subkriteria',[SubKriteria::class,'subkriteria']);

Route::group([
    'middleware' => 'custom_auth'],function() {
    Route::get('/DRCLateks', [DRCLateksController::class, 'index']);
    Route::get('/VFA', [VFAController::class, 'index']);
        
} );