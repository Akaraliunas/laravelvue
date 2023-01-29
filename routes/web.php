<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProjectController;

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

Route::get('/', ['\App\Http\Controllers\AppController', 'index']);
Route::get('/about', ['\App\Http\Controllers\AppController', 'index']);
Route::get('/projects', ['\App\Http\Controllers\AppController', 'index']);
Route::get('/contacts', ['\App\Http\Controllers\AppController', 'index']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('admin/projects', ProjectController::class);
    Route::view('admin/dashboard', 'dashboard')->name('dashboard');
    Route::view('admin/forms', 'forms')->name('forms');
    Route::view('admin/cards', 'cards')->name('cards');
    Route::view('admin/charts', 'charts')->name('charts');
    Route::view('admin/buttons', 'buttons')->name('buttons');
    Route::view('admin/modals', 'modals')->name('modals');
    Route::view('admin/tables', 'tables')->name('tables');
    Route::view('admin/calendar', 'calendar')->name('calendar');
});


Route::prefix('api')->group( function() {
    Route::get('getProjects', ['\App\Http\Controllers\ProjectController', 'getProjects']);
});
