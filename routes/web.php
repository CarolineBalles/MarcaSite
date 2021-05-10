<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProposalController;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

//require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

Route::resource('usuarios', UserController::class)->names('user')->parameters(['usuarios' => 'user']);


Route::get('lista-clientes', [ClientController::class, 'index'])->name('client.index');
Route::get('criar-cliente', [ClientController::class, 'create'])->name('client.create');
Route::post('criar-cliente', [ClientController::class, 'store'])->name('client.store');
Route::get('editar-cliente/{client}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('editar-cliente/{client}', [ClientController::class, 'update'])->name('client.update');
Route::get('lista-clientes/client-proposta/{client}', [ClientController::class, 'show'])->name('client.proposal');
//Route::resource('clientes', ClientController::class)->names('client')->parameters(['clientes' => 'client']);

Route::get('lista-propostas', [ProposalController::class, 'index'])->name('proposal.index');
Route::get('criar-proposta', [ProposalController::class, 'create'])->name('proposal.create');
Route::post('criar-proposta', [ProposalController::class, 'store'])->name('proposal.store');
Route::get('editar-proposta/{proposal}', [ProposalController::class, 'edit'])->name('proposal.edit');
Route::put('editar-proposta/{proposal}', [ProposalController::class, 'update'])->name('proposal.update');
//Route::resource('propostas', ProposalController::class)->names('proposal')->parameters(['propostas' => 'proposal']);
Route::post('lista-propostas/busca', [ProposalController::class, 'search'])->name('proposal.search');
Route::get('propostas/export', [ProposalController::class, 'export'])->name('proposal.export');
