<?php

//use App\Http\Controllers\WelcomeController;
//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

//Route::get('/{ten}/{tuoi?}', function ($ten, $tuoi = 1) {
//    //return view('welcome');
//    echo "Welcome to Laravel - $ten - $tuoi";
//});


//Route::get('/{ten}/{tuoi?}', [WelcomeController::class, 'welcome']);

//Route::get('/', [WelcomeController::class, 'form']);
//Route::post('/post', [WelcomeController::class, 'post']);



Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::post('/create', [StudentController::class, 'store'])->name('store');







