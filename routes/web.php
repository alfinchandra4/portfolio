<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;

// Route::view('/', 'public.content')->name('project');
Route::get('/', [PublicController::class, 'index'])->name('project');
Route::get('/project/{project_id}', [PublicController::class, 'project'])->name('detail');
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');

Route::get('/login',  [AuthenticationController::class, 'login']);
Route::post('/login', [AuthenticationController::class, 'attempt']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

  Route::get('/', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
  Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
  Route::put('/update/{project_id}', [AdminController::class, 'update'])->name('admin.update');
  Route::get('/project/{project_id}', [AdminController::class, 'project'])->name('admin.project');
  Route::get('/remove-image/{project_id}', [AdminController::class, 'remove_image'])->name('admin.remove_image');
  Route::get('/test', [AdminController::class, 'test'])->name('admin.test');
});
