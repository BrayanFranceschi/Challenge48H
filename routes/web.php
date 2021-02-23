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

Route::get('/', function () {
    return view('welcome');
});


 //Routes liées à l'ajout d'une image
 Route::get('/ajoutImage','App\Http\Controllers\ImageController@formulaireImage');
 Route::post('/ajoutImage','App\Http\Controllers\ImageController@addImage');

//Routes liées à la modifications des tags
Route::get('/modification_tags/{id}/','App\Http\Controllers\ImageController@FormulaireModifTag');
Route::post('/modification_tags', 'App\Http\Controllers\ImageController@ModifTag');


//Route lié au catalogue
Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@catalogue');
Route::get('/recherche', 'App\Http\Controllers\CatalogueController@recherche');