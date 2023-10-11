<?php

use App\Http\Controllers\BautizoController;
use App\Http\Controllers\CelulasController;
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

// route::get('/registro',function(){
//     return view('miembros');
// });

route::get('bautizo',function(){
    return view('bautizados');
});

route::post('/celula',[CelulasController::class,'store'])->name('celula.store');
route::get('/celula',[CelulasController::class,'index'])->name('celula.index');
Route::put('registrocelulao/update/{id}', [CelulasController::class, 'update'])->name('celula.update');
// route::get('registrocelulao/edit{id}',[CelulasController::class,'edit'])->name('celula.edit');
// Route::get('/show/{id}', [CelulasController::class, 'show'])->name('celula.show');
route::get('registrocelulao',[CelulasController::class,'index'])->name('registrocelulao');//para direccionar la pantalla de inicio
route::get('/inicio',[CelulasController::class,'contartotal']);
// route::get('miembros',[CelulasController::class,'index'])->name('miembros');
//aqui vienen las routas de miembros
route::post('/store',[MiembroController::class,'store'])->name('miembro.store');
route::get('/miembros',[MiembroController::class,'index'])->name('miembro.index');

//aqui routas de bautizados
// route::post('store',[BautizoController::class,'store'])->name('bautizo');

