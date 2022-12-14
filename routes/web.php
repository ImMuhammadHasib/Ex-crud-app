<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // create a array of integers
//     // get a random string from array named food_images
//     // return view with random string

//     $numbers = [1, 2, 3, 4, 5];
//     return view('Racipe.index', ['recipes' => $numbers]);
// });

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->name('recipes.index');
Route::post('/recipes', 'App\Http\Controllers\RecipeController@store')->name('recipes.store');
Route::get('/recipes/create', 'App\Http\Controllers\RecipeController@create')->name('recipes.create');
Route::get('/ingrads', 'App\Http\Controllers\IngradientController@index')->name('ingradients.index');