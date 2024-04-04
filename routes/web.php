<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('roles/data', [RoleController::class, 'data'])->name('roles.data');
Route::post('roles/get', [RoleController::class, 'get'])->name('roles.get');
Route::DELETE('roles/remove-permission', [RoleController::class, 'removePermission'])->name('roles.remove-permission');
Route::post('roles/add-permission', [RoleController::class, 'addPermission'])->name('roles.add-permission');
Route::resource('roles', RoleController::class)->except('create', 'show', 'edit', 'update');


Route::get('permissions/data', [PermissionController::class, 'data'])->name('permissions.data');
Route::post('permissions/get', [PermissionController::class, 'get'])->name('permissions.get');
Route::post('permissions/getByRole', [PermissionController::class, 'getByRole'])->name('permissions.getByRole');
Route::resource('permissions', PermissionController::class)->except('create', 'show', 'edit', 'update');
