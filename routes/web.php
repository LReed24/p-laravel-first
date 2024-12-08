<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AutenticationController;


Route::get('/', function () {
    return view('index');
});

//**** ROLES ****/
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');