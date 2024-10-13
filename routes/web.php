<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', function () {
    return 'Form Inviato';
});

Route::match(['put', 'patch'], '/update-item', function () {
    return 'Match ti consente di gestire le richieste inserite nell\'array con un\'unica Route';
});

Route::any('/any', function () {
    return 'any consente di gestiore qualsiasi metodo HTTP con una singola Route';
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'prefix raggrupa le varie route al suo interno in base al prefisso. Nel seguente caso sarà admin/users';
    });

    Route::get('/settings', function () {
        return 'prefix raggrupa le varie route al suo interno in base al prefisso. Nel seguente caso sarà admin/settings';
    });
});

//Route nominate che potranno essere richiamate dalla funzione route(nomeRoute) che in questo caso sarà route('profile')
Route::get('/profile', [ProvaController::class, 'provaFunction'])->name('profile');
