<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.content')->name('project');

Route::view('/project/1', 'public.content-detail')->name('project.detail');

Route::view('/profile', 'public.profile')->name('profile');
