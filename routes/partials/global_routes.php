<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/pages/welcome');
});
Route::get('/ueber-uns', function () {
    return view('frontend/pages/about');
});
Route::get('/leistungen', function () {
    return view('frontend/pages/services');
});
Route::get('/referenzen', function () {
    return view('frontend/pages/references');
});
Route::get('/mieterstrommodelle', function () {
    return view('frontend/pages/mieterstrommodelle');
});
Route::get('/pv-anlagen', function () {
    return view('frontend/pages/pv-anlagen');
});
Route::get('/batteriespeicher', function () {
    return view('frontend/pages/batteriespeicher');
});
Route::get('/vor-ort-service-pv-anlagen-industrieanlagen', function () {
    return view('frontend/pages/vor-ort-service-pv-anlagen-industrieanlagen');
});
Route::get('/vor-ort-service-trafostationen', function () {
    return view('frontend/pages/vor-ort-service-trafostationen');
});
Route::get('/schaltschrankbau', function () {
    return view('frontend/pages/schaltschrankbau');
});
Route::get('/kennlinien-messung-netzanalysen', function () {
    return view('frontend/pages/kennlinien-messung-netzanalysen');
});
Route::get('/leih-geraete-stromversorgung', function () {
    return view('frontend/pages/leih-geraete-stromversorgung');
});
Route::get('/kontakt', function () {
    return view('frontend/pages/contact');
});
Route::get('/impressum', function () {
    return view('frontend/pages/impressum');
});
Route::get('/datenschutz', function () {
    return view('frontend/pages/privacy');
});

Route::get('/login', function () {
    return view('global/pages/auth/login');
})->middleware('guest:' . implode(',', array_keys(config('auth.guards'))))->name('login');

Route::get('/forgot-password', function () {
    return view('global/pages/password/forgot-password');
})->name('forgot-password');
