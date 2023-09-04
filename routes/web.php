<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicencasController;
use App\Http\Controllers\CondicionanteController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\DownloadArquivoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/enviar-emails', [CondicionanteController::class, 'validadecondi'])->name('enviar-emails');

Route::get('/cadastro-user',  [CadastroUsuarioController::class, 'index'])
->name('cadastro-user');
Route::post('/cadastro-user',  [CadastroUsuarioController::class, 'store'])
->name('cadastro-user');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [LicencasController::class, 'index'])->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/cadastro', [LicencasController::class, 'show'])->middleware(['auth', 'verified'])->name('cadastro-licencas');
Route::post('/cadastro-licencas', [LicencasController::class, 'create'])->name('cadastro');

Route::get('/download/{id}', [DownloadArquivoController::class, 'download'])->name('download');


Route::get('/licencas/{id}', [LicencasController::class, 'licencas'])->name('licencas-view');
Route::get('/licenca-update/{id}', [LicencasController::class, 'edit'])->name('licencas-update');
Route::post('/licenca-update/{id}', [LicencasController::class, 'update'])->name('licencas-update');
Route::get('/cadastro-condicionantes/{id}', [CondicionanteController::class, 'index'])->name('cadastro-condicionantes');
Route::post('/cadastro-condicionantes/{id}', [CondicionanteController::class, 'create'])->name('cadastro-condicionantes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
