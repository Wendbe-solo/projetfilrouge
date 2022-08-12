<?php

use App\Http\Controllers\CommunalController;
use App\Http\Controllers\Elevecontrollers;
use App\Http\Controllers\HomeControllers;
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

Route::get('welcome', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('anneesco',[CommunalController::class,'create'])->name('anneesco');

Route::post('anneesco',[CommunalController::class,'annee'])->name('anneesco.ajout');

Route::get('anneesco',[CommunalController::class,'ans'])->name('anneesco');





Route::get('ajoutsecretaire',[CommunalController::class,'secret'])->name('ajout.secret');

Route::post('ajoutsecretaire',[Elevecontrollers::class,'store'])->name('ajout.secretaire');



Route::get('ajouteleve',[CommunalController::class,'eleve'])->name('ajout.eleve');

Route::post('ajouteleve',[CommunalController::class,'index'])->name('ajouteleve/ajout');

Route::get('ajouteleve',[CommunalController::class,'ele'])->name('ajouteleve');




Route::get('listes',[CommunalController::class,'liste1'])->name('listes');


Route::get('listes',[CommunalController::class,'listes'])->name('listes');



Route::get('listee',[CommunalController::class,'liste2'])->name('listee');

Route::get('listee',[CommunalController::class,'liste'])->name('listee');




Route::get('note',[CommunalController::class,'note'])->name('note');





Route::get('matiere',[HomeControllers::class,'index'])->name('matiere');

Route::get('matiere',[CommunalController::class,'matiere'])->name('matiere');






Route::get('trimestre',[CommunalController::class,'trimestre'])->name('trimestre');

Route::post('trimestre',[CommunalController::class,'trimest'])->name('trimestre.ajout');

Route::get('trimestre',[CommunalController::class,'trim'])->name('trimestre');





Route::get('amatiere',[CommunalController::class,'amatiere'])->name('amatiere');

Route::post('amatiere',[CommunalController::class,'amatie'])->name('amatiere.ajout');

Route::get('amatiere',[CommunalController::class,'ama'])->name('amatiere');







Route::get('classe',[CommunalController::class,'classe'])->name('classe');

Route::post('classe',[CommunalController::class,'class'])->name('classe.ajout');

Route::get('classe',[CommunalController::class,'clas'])->name('classe');





Route::get('devoir',[HomeControllers::class,'devoir'])->name('devoir');

Route::post('devoir',[HomeControllers::class,'devo'])->name('devoir.ajout');

Route::get('devoir',[HomeControllers::class,'deve'])->name('devoir');


