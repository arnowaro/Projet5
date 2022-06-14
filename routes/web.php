<?php


use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\Amiscontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\CentreInteretController;
use App\Http\Controllers\Membrecontroller;
use App\Http\Controllers\PostController;
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
Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('index');})->name('home');
});


// celle de Florent
Route::post('/comment', [PostController::class, 'comment'])->name('comment');
Route::get('/comment', [PostController::class, 'comment'])->name('comment');


//cherche tous les commentaires 
Route::get('/commentaire',[CommentaireControllerer::class, 'getComm'])->name('Commentaire');

//cherche les commentaires par post id
Route::get('/commentaire/{id}',[CommentaireController::class, 'getCommByPost'])->whereNumber('id')->name('CommentaireByPost');

//Ajoute le champs form pour ajouter un commentaire
Route::get('/commentaire/create',[CommentaireController::class, 'createComm'])->name('CommentaireCreate');
Route::post('/commentaire/create',[CommentaireController::class, 'storeComm'])->name('CommentaireStore');

//Modifier un commentaire
Route::get('/commentaire/{id}/edit',[CommentaireController::class, 'editComm'])->name('CommentaireEdit');
Route::post('/commentaire/{id}/edit',[CommentaireController::class, 'updateComm'])->name('CommentaireUpdate');

//Effacer un commentaire
Route::get('/commentaire/{id}/delete',[CommentaireController::class, 'deleteComm'])->name('CommentaireDelete');
Route::post('/commentaire/{id}/delete',[CommentaireController::class, 'destroyComm'])->name('CommentaireDestroy');
    
/*Route::middleware(['auth'])->group(function () {*/
Route::get('profile/{id}', [Membrecontroller::class, 'edit'])
->whereNumber('id')->name('profile');

Route::post('profile/{id}', [Membrecontroller::class, 'update'])
->name('update.action');
/*});*/
Route::get('register', [Authcontroller::class, 'register'])->name('register');

Route::post('register', [Authcontroller::class, 'register_action'])->name('register.action');

Route::get('login', [Authcontroller::class, 'login'])->name('login');

Route::post('login', [Authcontroller::class, 'login_action'])->name('login.action');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');


// Les centres d'intérets

Route::get('/centreinteret',[CentreInteretController::class, 'index'])->name('centreinteret');

Route::post('/centreinteret',[CentreInteretController::class, 'store'])->name('centreinteret.store');

Route::get('/centreinteret/create',[CentreInteretController::class, 'create'])->name('centreinteret.create');

Route::get('/centreinteret/{id}',[CentreInteretController::class, 'show'])->name('centreinteret.show');

Route::get('/centreinteret/{id}/edit',[CentreInteretController::class, 'edit'])->whereNumber('id')->name('centreinteret.edit');

Route::post('/centreinteret/{id}/edit',[CentreInteretController::class, 'update'])->name('centreinteret.update');

Route::get('/centreinteret/{id}/delete',[CentreInteretController::class, 'delete'])->name('centreinteret.delete');

Route::post('/centreinteret/{id}/delete',[CentreInteretController::class, 'destroy'])->name('centreinteret.destroy');



// Les posts de la page d'accueil 


Route::get('/',[PostController::class, 'index'])->name('post');


// profil public

Route::get('/profilepub',[Membrecontroller::class, 'profilepub'])->name('profilpub');
Route::get('/profilepub/{id}', [MembreController::class, 'showprofile'])->whereNumber('id');
// le compteur de like

// Route::get('/',[PostController::class, 'nblikes'])->name('like');



// Les amis

Route::get('/amis',[Amiscontroller::class, 'showamis'])->name('amis');
// Route::get('/amis/',[Amiscontroller::class, 'showdemandeamis'])->name('demandeamis');
Route::post('/amis/store',[Amiscontroller::class, 'storeamis'])->name('amis.store');

// accepter un amis
Route::post('/amis/edit',[Amiscontroller::class, 'acceptamis'])->name('amis.accept');    