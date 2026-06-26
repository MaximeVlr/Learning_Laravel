<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
            'framework' => 'Laravel'
    ]);
});

Route::get('/about', function () {
    return 'À propos';
});

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects.index');

Route::get('/projects/{project}', [ProjectController::class, 'show'])
    ->name('projects.show');