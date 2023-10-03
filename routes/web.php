<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamsController;

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


Route::get('/', [LoginController::class , 'index']);

Route::post('/check-user', [LoginController::class , 'store'])->name('check');
Route::get('/logout', [LoginController::class , 'destroy'])->name('logout');

// Route::get('/website/teams' , [TeamsController::class , 'index']);
// Route::post('/website/points' , [TeamsController::class , 'chooseTeam'])->name('team');

Route::post('/website/collectData' , [TeamsController::class , 'store'])->name('collectData');
Route::get('/website/average' , [TeamsController::class , 'average']);



Route::name('admin.')->prefix('admin')->group(function () {
  Route::resource('/Results_Table', AdminController::class);

});
Route::get('/results', function () {
  return view('admin/results');
});


Route::prefix('user')->name('user.')->group(function () {
Route::resource('/voting', VotingController::class);
// Route::resource('/website', VotingController::class);
});



