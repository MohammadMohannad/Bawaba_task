<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
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

Route::get('/', function () {
    return view('application');
});

Route::get('/dashboard', [ApplicantController::class,'index']);
Route::post('/create',[ApplicantController::class,'create']);