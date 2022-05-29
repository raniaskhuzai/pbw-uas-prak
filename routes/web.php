<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinopsisController;
use App\Http\Controllers\CharaController;
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
    return view('home');
});

Route::get('/Synopsis', function () {
    return view('synopsis');
});

Route::get('/Bookname', function () {
    return view('bookname');
});

Route::get('/inputs', function () {
    return view('input');
});

Route::get('/inputc', function () {
    return view('input');
});

Route::get('/Done', [SynopsisController::class, 'readdata']);
Route::get('/inputs', [SynopsisController::class, 'input']);
Route::post('/notesynopsis/store', [SynopsisController::class, 'store']);

Route::get('/notesynopsis/edit/{title}', [SynopsisController::class, 'edit']);
Route::post('/notesynopsis/update', [SynopsisController::class, 'update']);
Route::get('/notesynopsis/hapus/{title}', [SynopsisController::class, 'hapus']);

// // Route::get('/Done', [CharaController::class, 'readdata']);
Route::get('/inputc', [Libcontroller::class, 'input']);
Route::get('/notelib/store', [Libcontroller::class, 'store']);

Route::get('/notelib/edit/{rating}', [Libcontroller::class, 'edit']);
Route::post('/notelib/update', [Libcontroller::class, 'update']);
Route::get('/notelib/hapus/{rating}', [Libcontroller::class, 'hapus']);