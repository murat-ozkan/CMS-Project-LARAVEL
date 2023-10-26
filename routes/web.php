<?php

use App\Http\Controllers\Backend\CopyController;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\SettingsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin', [DefaultController::class, 'index'])->name('admin');

Route::get('admin/settings', [SettingsController::class, 'index'])->name('settings');
