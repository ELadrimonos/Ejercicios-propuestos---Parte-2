<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('posts', function (){
   return 'POSTS';
})->name('posts_listado');

Route::get('posts/{id}', function ($id){
   return 'POST id: ' . $id;
})->name('posts_ficha');
