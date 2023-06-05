<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthrizationController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);


Route::get('test', [HomeController::class, 'test']);
Route::get('roles', [HomeController::class, 'roles']);
Route::get('permission/{id}', [HomeController::class, 'permission']);
Route::post('permission/{id}', [HomeController::class, 'permissions']);

Route::get('/create-role', [AuthrizationController::class, 'createRole'])->middleware('auth')->name('role.create');
Route::post('/create-role', [AuthrizationController::class, 'storeRole'])->middleware('auth')->name('role.store');

Route::get('/create-permission', [AuthrizationController::class, 'createPermission'])->middleware('auth')->name('permission.create');
Route::post('/create-permission', [AuthrizationController::class, 'storePermission'])->middleware('auth')->name('permission.store');

Route::get('/assign-permissions-to-role', [AuthrizationController::class, 'createAssignPermissionToRole'])->middleware('auth')->name('assign-permissions-to-role.create');
Route::post('/assign-permissions-to-role', [AuthrizationController::class, 'storeAssignPermissionToRole'])->middleware('auth')->name('assign-permissions-to-role.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');


    })->name('dashboard');
});
