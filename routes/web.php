<?php

use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\GraficosController;
use App\Http\Controllers\RevistasController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::resource('roles', RolesController::class)->names('admin.roles');
    Route::get('roles/{id}/assign', [RolesController::class, 'assign'])->name('admin.roles.assign');
    Route::post('rol2user', [RolesController::class, 'rol2user'])->name('admin.roles.rol2user');
    Route::resource('permisos', PermissionsController::class)->names('admin.permissions');
    Route::get('roles/{id}/search', [RolesController::class, 'search'])->name('admin.roles.search');    
    Route::post('permisos/search', [PermissionsController::class, 'search'])->name('admin.permissions.search');    
    Route::resource('revistas', RevistasController::class)->names('revistas');
    Route::get('rev_tabla',[RevistasController::class,'rev_tabla'])->name('rev_tabla');
});
