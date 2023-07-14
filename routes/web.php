<?php

use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesControllers;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    // Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users/create', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/show', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::post('users-delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    Route::get('roles', [\App\Http\Controllers\rolesController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [\App\Http\Controllers\rolesController::class, 'create'])->name('roles.create');
    Route::post('roles/create', [\App\Http\Controllers\rolesController::class, 'store'])->name('roles.store');
    Route::get('roles/{user}/show', [\App\Http\Controllers\rolesController::class, 'show'])->name('roles.show');
    Route::get('roles/{user}/edit', [\App\Http\Controllers\rolesController::class, 'edit'])->name('roles.edit');
    Route::patch('roles/{user}/update', [\App\Http\Controllers\rolesController::class, 'update'])->name('roles.update');
    Route::post('roles-delete', [\App\Http\Controllers\rolesController::class, 'destroy'])->name('roles.destroy');

    Route::get('permissions', [\App\Http\Controllers\PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('permissions/create', [\App\Http\Controllers\PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('permissions/create', [\App\Http\Controllers\PermissionsController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{permission}/show', [\App\Http\Controllers\PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('permissions/{permission}/edit', [\App\Http\Controllers\PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::patch('permissions/{permission}/update', [\App\Http\Controllers\PermissionsController::class, 'update'])->name('permissions.update');
    Route::post('permissions-delete', [\App\Http\Controllers\PermissionsController::class, 'destroy'])->name('permissions.destroy');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // Route::resource('roles', RolesControllers::class);
    // Route::resource('permissions', PermissionsController::class);
});

