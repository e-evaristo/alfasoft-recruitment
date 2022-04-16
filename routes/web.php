<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [ContactsController::class, 'index'])->name('dashboard');
    Route::get('/create', [ContactsController::class, 'create'])->name('contacts.create');
    Route::get('/{contact}/show', [ContactsController::class, 'show'])->name('contacts.show');
    Route::delete('/{contact}/delete', [ContactsController::class, 'delete'])->name('contacts.delete');
    Route::get('/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
    Route::put('/{contact}/update', [ContactsController::class, 'update'])->name('contacts.update');
    Route::post('/store', [ContactsController::class, 'store'])->name('contacts.store');

});

require __DIR__.'/auth.php';
