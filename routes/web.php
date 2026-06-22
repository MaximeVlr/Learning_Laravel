<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Accueil';
});

Route::get('/about', function() {
    return 'À propos';
});

Route::get('/projects', function() {
    return 'Liste des projets';
});

Route::get('/projects/{id}', function($id) {
    return 'Détail du projet ' . $id;
});

