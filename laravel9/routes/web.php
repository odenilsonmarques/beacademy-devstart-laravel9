<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ViaCepController
};

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

//via servicep
Route::get('/viacep',[ViaCepController::class,'index'])->name('viacep.index');

Route::post('/viacep',[ViaCepController::class,'indexAction'])->name('viacep.indexAction');

Route::get('/viacep/{cep}',[ViaCepController::class,'show'])->name('viacep.show');
