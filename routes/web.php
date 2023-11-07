<?php

use App\Http\Controllers\BautizoController;
use App\Http\Controllers\CelulasController;
use App\Http\Controllers\EncuentrosController;
use App\Http\Controllers\LideresController;
use App\Http\Controllers\MiembroController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

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

route::get('/inicio',function(){
    return view('inicio');
});


route::get('encuentro',function(){
    return view('encuentro');
});
// route::get('prueba',function(){
//     return view('prueba');
// });


route::post('/celula',[CelulasController::class,'store'])->name('celula.store');
route::get('/celula',[CelulasController::class,'index'])->name('celula.index');
Route::put('registrocelulao/update', [CelulasController::class, 'update'])->name('celula.update');
route::get('registrocelulao/edit{id}',[CelulasController::class,'edit'])->name('celula.edit');
Route::get('/show/{id}', [CelulasController::class, 'show'])->name('celula.show');
route::get('registrocelulao',[CelulasController::class,'index'])->name('registrocelulao');//para direccionar la pantalla de inicio
route::get('/inicio',[CelulasController::class,'contartotal']);
route::get('pdfcelula',[CelulasController::class,'pdfcelula'])->name('pdfcelu');
route::get('/detallecelula/{informe}',[CelulasController::class,'show'])->name('prueba.show');
// route::get('pdfcelu',[CelulasController::class,'cantidadcelu']);

//aqui vienen las routas de miembros
route::post('/miembros',[MiembroController::class,'store'])->name('miembro.store');//preguntar porque al cambiar store a miembro sale bien 
route::get('/miembros',[MiembroController::class,'index'])->name('miembro.index');
route::put('/miembros/update',[MiembroController::class,'update'])->name('miembros.update');
route::get('buscar',[MiembroController::class,'buscar'])->name('mbuscar');
// route::get('pdfmiembr',[MiembroController::class,'pdfmiembr'])->name('pdfmie');
route::get('pdfmiembr',[MiembroController::class,'mmiembro'])->name('pdfmie');
route::get('/pdfmiebr',[MiembroController::class,'conteo']);

//aqui routas de bautizados
route::post('/bautizados',[BautizoController::class,'store'])->name('bautizo.store');
route::get('/bautizados',[BautizoController::class,'index'])->name('bautizo.index');
// route::get('/bautizados',[MiembroController::class,'bautizadoss'])->name('bautizadoss');
//aqui routas de escuela de lideres
route::post('escuela',[LideresController::class,'store'])->name('lidere.store');
route::get('index',[LideresController::class,'index'])->name('lidere.index');
route::put('update/{id}',[LideresController::class,'update'])->name('lidere.update');
route::get('escuela',[LideresController::class,'index'])->name('escuela');
//aqui routas de encuentro
route::get('encuentro',[EncuentrosController::class,'index'])->name('encu.index');
route::post('store',[EncuentrosController::class,'store'])->name('encu.store');
route::put('/update',[EncuentrosController::class,'update'])->name('encu.update');
