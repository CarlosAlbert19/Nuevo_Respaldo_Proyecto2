<?php

use App\Http\Controllers\PacienteController;
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

Route::get('/', [PacienteController::class, 'pagina_de_caida']);

Route::resource('paciente', PacienteController::class);//->middleware('auth');

Route::get('prueba_assets', function(){
    return view('prueba_de_assets');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/paciente/correo/{paciente}', [PacienteController::class, 'notificarFactura'])->name('paciente/correo');

Route::get('/descarga/{archivo}', [PacienteController::class, 'descargaArchivo'])->name('descarga');
