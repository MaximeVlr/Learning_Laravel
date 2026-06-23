<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
            'framework' => 'Laravel'
    ]);
});

Route::get('/about', function () {
    return 'À propos';
});

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

function getProjects(): array 
{
    return [
        [
            'id' => 1,
            'title' => 'Portfolio Laravel',
            'description' => 'Un projet pour présenter mes compétences en Laravel.',
        ],
        [
            'id' => 2,
            'title' => 'Application de gestion de tâches',
            'description' => 'Une application pour gérer les tâches quotidiennes.',
        ],
        [
            'id' => 3,
            'title' => 'Mini CRM freelance',
            'description' => 'Un mini CRM pour les freelances afin de gérer leurs clients.',
        ],
    ];
}
