<?php

use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Authentication Routes
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user', [ApiAuthController::class, 'user'])->middleware('auth:sanctum');

Route::get('/userlist', [ApiAuthController::class, 'userlist']);

// Task Routes
// Route::middleware('auth:sanctum')->group(function () {
Route::post('/task-create', [TaskController::class, 'taskCreate']);
Route::get('/task-show/{userid}', [TaskController::class, 'taskShow']);
Route::put('/task-update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task-delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
// });
