<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//  
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
Route::get('/dashboard', function () {
    return view('Admin.dashboard.index');
})->name('dashboard');

Route::get('/home', function () {
    return view('Client.dashboard.index');
});

Route::resource('roles', RoleController::class);
Auth::routes();


