<?php

use App\Http\Controllers\BajaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EditarSolicitudController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolicitudesController;

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
    return view('principal');
})->name('principal');

//Crea un usuario enviando primero al formulario y despues a la DB
Route::get('/crear', [RegisterController::class,'index']);
Route::post('/crear', [RegisterController::class,'store']);

//Ingreso al sistema SAU con validacion 
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

//Salida del sistema SAU
Route::get('/logout', [LogoutController::class,'store'])->name('logout');

//Perfil
Route::get('/perfil', [PerfilController::class,'vistaPerfil'])->name('perfil');
Route::get('/perfil/modificar', [PerfilController::class,'vistaModificarPerfil'])->name('modifar');
Route::post('/perfil/modificar/save', [PerfilController::class,'guardarPerfilActualizado'])->name('modifar');

//ingreso al dashborad de las solicitudes
Route::get('/muro', [PostController::class,'index'])->name('post.index');

Route::get('/registro', [SolicitudesController::class,'registro']);
Route::post('/registro/save', [SolicitudesController::class,'saveRegistro']);

Route::get('/solicitud', [SolicitudesController::class,'index']);
Route::post('/solicitud/save', [SolicitudesController::class,'crear']);

Route::get('/baja', [BajaController::class,'index']);
Route::post('/baja/save', [BajaController::class,'crear']);

Route::get('/consulta', [ConsultaController::class,'consulta'])->name('consulta');
Route::get('/consulta/{idEquipo}', [ConsultaController::class, 'consultaPermisos']);

//Ruta pendiente para editar solicitud
Route::get('/editar', [EditarSolicitudController::class,'index']);

//Download pdf
Route::get('/solicitud/download-pdf', [SolicitudesController::class, 'downloadPdf']);

//Gernera PDF
Route::get('/muro/stream-pdf/{fileID}', [SolicitudesController::class, 'streamPDF']);

//Send Mail
Route::get('/solicitud/sendMail', [SolicitudesController::class, 'sendMail']);







