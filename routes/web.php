<?php

use App\Http\Controllers\CommentaireController;
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


//cherche tous les commentaires 
Route::get('/commentaire',[CommentaireControllerer::class, 'getComm'])->name('Commentaire');

//cherche les commentaires par post id
Route::get('/commentaire/{id}',[CommentaireController::class, 'getCommByPost'])->name('CommentaireByPost');

//Ajoute le champs form pour ajouter un commentaire
Route::get('/commentaire/create',[CommentaireController::class, 'createComm'])->name('CommentaireCreate');
Route::post('/commentaire/create',[CommentaireController::class, 'storeComm'])->name('CommentaireStore');

//Modifier un commentaire
Route::get('/commentaire/{id}/edit',[CommentaireController::class, 'editComm'])->name('CommentaireEdit');
Route::post('/commentaire/{id}/edit',[CommentaireController::class, 'updateComm'])->name('CommentaireUpdate');

//Effacer un commentaire
Route::get('/commentaire/{id}/delete',[CommentaireController::class, 'deleteComm'])->name('CommentaireDelete');
Route::post('/commentaire/{id}/delete',[CommentaireController::class, 'destroyComm'])->name('CommentaireDestroy');