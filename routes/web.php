<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
=======
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
>>>>>>> 59ad0d99e6c13cfb77bd7721699bb1bec172fcdf

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
<<<<<<< HEAD
    return Inertia::render('Create');
});

// Route::get('/user', function () {
//     return Inertia::render('Profile/Form');
// });

// Route::get('/usuario/listar', function () {
//     return Inertia::render('Usuario/Usuarios');
// });
Route::get('usuarios/listar',[UsuarioController::class, 'index'])->name('usuarios.index');


Route::get('/customers/create',[CustomerController::class, 'create']);
Route::get('customers',[CustomerController::class, 'index'])->name('customers.index');
Route::post('customers',[CustomerController::class,'store']);


=======
    return view('welcome');
});

>>>>>>> 59ad0d99e6c13cfb77bd7721699bb1bec172fcdf
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/supports/{id}/replies', [ReplySupportController::class, 'store'])->name('replies.store');
    Route::delete('/supports/{id}/replies/{reply}', [ReplySupportController::class, 'destroy'])->name('replies.destroy');
    Route::get('/supports/{id}/replies', [ReplySupportController::class, 'index'])->name('replies.index');

    // Route::resource('/supports', SupportController::class);
    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
    Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
});

require __DIR__ . '/auth.php';
