<?php

use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\GraficosController;


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

Route::get('/', function() {
    return view('welcome');
})->name('welcome');
Auth::routes();

// Route::get('/', function() {
//     return view('home');
// })->name('home')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::resource('roles', RolesController::class)->names('admin.roles');
    Route::get('roles/{id}/assign', [RolesController::class, 'assign'])->name('admin.roles.assign');
    Route::post('rol2user', [RolesController::class, 'rol2user'])->name('admin.roles.rol2user');
    Route::resource('permisos', PermissionsController::class)->names('admin.permissions');
    Route::get('roles/{id}/search', [RolesController::class, 'search'])->name('admin.roles.search');    
    Route::post('permisos/search', [PermissionsController::class, 'search'])->name('admin.permissions.search');    
});
