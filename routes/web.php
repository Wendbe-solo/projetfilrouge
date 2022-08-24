<?php

use App\Http\Controllers\AnneController;
use App\Http\Controllers\AnneescController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CommunalController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\Elevecontrollers;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\ListeeController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\TrimestreController;
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


Route::get('bulletin', function () {
    return view('eleve.bulletin');
});


Route::get('carte', function () {
    return view('eleve.cart');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('anneesco',AnneescController::class)->middleware(['auth']);

Route::resource('classe',ClasseController::class)->middleware(['auth']);

Route::resource('matiere',MatiereController::class)->middleware(['auth']);

Route::resource('trimestre',TrimestreController::class)->middleware(['auth']);

Route::resource('devoir',DevoirController::class)->middleware(['auth']);

Route::resource('ajouteleve',EleveController::class)->middleware(['auth']);

Route::resource('listee',ListeeController::class)->middleware(['auth']);

// Route::resource('ajoutsecretaire',SecretaireController::class)->middleware(['auth']);


// Route::get('listee', [ListeeController::class, 'wise'])->name('listee.wise');


// Route::get('anneesco',[AnneController::class,'create'])->name('anneesco')->middleware(['auth']);

// Route::post('anneesco',[AnneController::class,'annee'])->name('anneesco.ajout')->middleware(['auth']);

// Route::get('anneesco',[AnneController::class,'ans'])->name('anneesco')->middleware(['auth']);


// Route::delete('anneesco/{annee}',[AnneController::class,'delete'])->name('anneesco.supprimer')->middleware(['auth']);

// Route::put('a#exampleModal/{annee}',[AnneController::class,'update'])->name('anneesco.update')->middleware(['auth']);


Route::get('ajoutsecretaire',[CommunalController::class,'secret'])->name('ajout.secret')->middleware(['auth']);;

Route::post('ajoutsecretaire',[Elevescontrollers::class,'store'])->name('ajout.secretaire')->middleware(['auth']);;



// Route::get('ajouteleve',[CommunalController::class,'eleve'])->name('ajout.eleve')->middleware(['auth']);;

// Route::post('ajouteleve',[CommunalController::class,'index'])->name('ajouteleve/ajout')->middleware(['auth']);;

// Route::get('ajouteleve',[CommunalController::class,'ele'])->name('ajouteleve')->middleware(['auth']);;




Route::get('listes',[CommunalController::class,'liste1'])->name('listes')->middleware(['auth']);;


// Route::get('listes',[CommunalController::class,'listes'])->name('listes')->middleware(['auth']);;



// Route::get('listee',[CommunalController::class,'liste2'])->name('listee')->middleware(['auth']);;

// Route::get('listee',[CommunalController::class,'liste'])->name('listee')->middleware(['auth']);;




// Route::get('note',[CommunalController::class,'note'])->name('note')->middleware(['auth']);;


Route::resource('note',NoteController::class)->middleware(['auth']);


// Route::get('matiere',[HomeControllers::class,'index'])->name('matiere')->middleware(['auth']);;

// Route::get('matiere',[CommunalController::class,'matiere'])->name('matiere')->middleware(['auth']);;






// Route::get('trimestre',[CommunalController::class,'trimestre'])->name('trimestre')->middleware(['auth']);;

// Route::post('trimestre',[CommunalController::class,'trimest'])->name('trimestre.ajout')->middleware(['auth']);;

// Route::get('trimestre',[CommunalController::class,'trim'])->name('trimestre')->middleware(['auth']);;





// Route::get('amatiere',[CommunalController::class,'amatiere'])->name('amatiere')->middleware(['auth']);;

// Route::post('amatiere',[CommunalController::class,'amatie'])->name('amatiere.ajout')->middleware(['auth']);;

// Route::get('amatiere',[CommunalController::class,'ama'])->name('amatiere')->middleware(['auth']);;







// Route::get('classe',[CommunalController::class,'classe'])->name('classe')->middleware(['auth']);;

// Route::post('classe',[CommunalController::class,'class'])->name('classe.ajout')->middleware(['auth']);;

// Route::get('classe',[CommunalController::class,'clas'])->name('classe')->middleware(['auth']);;





// Route::get('devoir',[HomeControllers::class,'devoir'])->name('devoir')->middleware(['auth']);;

// Route::post('devoir',[HomeControllers::class,'devo'])->name('devoir.ajout')->middleware(['auth']);;

// Route::get('devoir',[HomeControllers::class,'deve'])->name('devoir')->middleware(['auth']);;


