<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//**** ROLES ****/
Route::get('/roles', [RoleController::class, 'index']);
