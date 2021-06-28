<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'dashboard.setLocale'],
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('users', UsersController::class)->only('update');

    Route::resource('applications', ApplicationController::class)->only('index', 'create', 'destroy');
});

require __DIR__ . '/auth.php';
