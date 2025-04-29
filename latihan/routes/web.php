<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function(){
    return view('profil');
});
Route::get('/total/{angka1}/{angka2}/{angka3}', function($angka1, $angka2, $angka3){
    $total = $angka1 + $angka2 + $angka3;
    return view('hasil',['total' => $total]);
});
