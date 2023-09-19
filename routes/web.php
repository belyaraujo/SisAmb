<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicencasController;
use App\Http\Controllers\CondicionanteController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\DownloadArquivoController;
use App\Models\Licencas;
use App\Models\Condicionantes;

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

// ---------------------------- Administrador ------------------------
Route::group(['middleware' => ['admin', 'auth.session']], function() {
    Route::get('/dashboard', [LicencasController::class, 'index'])->middleware(['auth', 'verified'])
->name('dashboard');
Route::get('/licencas/{id}', [LicencasController::class, 'licencas'])->name('licencas-view');

 // --------------------- Cadastro de Usuário -------------------------

Route::get('/cadastro-user',  [CadastroUsuarioController::class, 'index'])
->name('cadastro-user');
Route::post('/cadastro-user',  [CadastroUsuarioController::class, 'store'])
->name('cadastro-user');

// --------------------- Licenças -------------------------

Route::get('/cadastro', [LicencasController::class, 'show'])->middleware(['auth', 'verified'])->name('cadastro-licencas');
Route::post('/cadastro-licencas', [LicencasController::class, 'create'])->name('cadastro');
Route::get('/licenca-update/{id}', [LicencasController::class, 'edit'])->name('licencas-update');
Route::post('/licenca-update/{id}', [LicencasController::class, 'update'])->name('licencas-update');

Route::get('/download/{id}', [DownloadArquivoController::class, 'download'])->name('download');


Route::get('/dashboard', function () {
    $licencas = Licencas::get();
    return view('notificacao', compact('licencas'));
});


// --------------------- Condicionantes -------------------------

Route::get('/cadastro-condicionantes/{id}', [CondicionanteController::class, 'index'])->name('cadastro-condicionantes');
Route::post('/cadastro-condicionantes/{id}', [CondicionanteController::class, 'create'])->name('cadastro-condicionantes');
Route::get('/condicionantes-update/{id}', [CondicionanteController::class, 'edit'])->name('condicionantes-update');
Route::post('/condicionantes-update/{id}', [CondicionanteController::class, 'update'])->name('condicionantes-update');


// --------------------- Informações do perfil -----------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


});


// ----------------------------- Usuário ----------------------------------

Route::group(['middleware' => ['client', 'auth.session']], function() {

Route::get('/dashboard', [LicencasController::class, 'index'])->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/licencas/{id}', [LicencasController::class, 'licencas'])->name('licencas-view');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
});

require __DIR__.'/auth.php';
