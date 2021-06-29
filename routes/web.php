<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UrenController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');



/* Client */


Route::get('/test', [ClientController::class, 'testClient']);
Route::get('/test2', [ClientController::class, 'testUser']);
Route::get('/dashboard/clients/index', [ClientController::class, 'index'])->name('indexClients');
Route::get('/dashboard/clients/show/{id}', [ClientController::class, 'show'])->name('showClients');

/* urenregistratie */
Route::get('/test3', [UrenController::class, 'testLocatie']);
Route::get('/test4', [UrenController::class, 'testUren']);
Route::get('/dashboard/urenregistratie/index', [UrenController::class, 'index'])->name('indexUren');
Route::get('/dashboard/urenregistratie/new', [UrenController::class, 'create'])->name('createUren');
