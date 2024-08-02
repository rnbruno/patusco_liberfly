<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Api\UsuarioApiController;
use App\Http\Controllers\DashboardController;





// Route::get('/contato', [SiteController::class, 'contact']);

// Route::get('/', function () {
//     return Inertia::render('Create');
// });

// Route::get('/user', function () {
//     return Inertia::render('Profile/Form');
// });

// Route::get('/usuario/listar', function () {
//     return Inertia::render('Usuario/Usuarios');
// });
// Route::get('usuarios/listar',[UsuarioController::class, 'usuario_pessoa'])->name('usuarios.pessoa');
// Route::post('/ajax-request-usuario', [UsuarioController::class, 'desativarAtivarUsuario']);
// Route::get('usuarios/listarjson',[UsuarioController::class, 'usuarioPessoaJson'])->name('usuarios.pessoa.json1');

// Route::get('cartao/listar',[App\Http\Controllers\Api\CartaoAPIController::class, 'index'])->name('cartao.listar');
// // Route::Inertia('cartao/listar','Cartão');


// Route::get('/customers/create',[CustomerController::class, 'create']);
// Route::get('customers',[CustomerController::class, 'index'])->name('customers.index');
// Route::post('customers',[CustomerController::class,'store']);

// Route::get('posts', [PostController::class, 'index']);

// Route::view('/', 'dashboard')->name('dashboard');
// Route::view('/dashboard')->name('dashboard1');

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

Route::post('login', [
    \App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('logout', [
    \App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::view('/{any}', 'layouts/app')
    ->where('any', '.*');
// require __DIR__ . '/auth.php';
