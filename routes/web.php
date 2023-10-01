<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

// route index
// Route::get('index', function(){
//     return view('index');
// });

//route controllers
Route::controller(ProdukController::class)->group(function (){
    Route::get('/index', 'index');
    //tambah data
    Route::get('/tambah_data', 'create');
    Route::post('/simpan', 'store');
    //edit data
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}', 'update');
    //hapus data
    Route::delete('/hapus/{id}', 'destroy');
});