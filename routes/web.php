<?php


use App\Http\Controllers\danirController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\VendorsController;
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

Route::get('/', [danirController::class, 'home']);
Route::get('roles', [RolesController::class, 'index']);
Route::get('roles/create', [RolesController::class, 'create']);
Route::post('roles', [RolesController::class, 'store']);
Route::get('roles/{id}/edit', [RolesController::class, 'edit']);
Route::post('roles/{id}', [RolesController::class, 'update']);



Route::get('satuan', [SatuanController::class, 'index']);
Route::get('satuan/create', [SatuanController::class, 'create']);
Route::post('satuan', [SatuanController::class, 'store']);

Route::get('vendor', [VendorsController::class, 'index']);
Route::get('vendor/create', [VendorsController::class, 'create']);
Route::post('vendor', [VendorsController::class, 'store']);
