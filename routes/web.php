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

/* Route::get('/dashboard', function () {
    return view('dashboard');
})-> middleware(['auth'])->name('dashboard');*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [ContactsController::class, 'index'])->name('dashboard');
    Route::get('/create', [ContactsController::class, 'create'])->name('contacts.create');
    Route::delete('/{contact}/delete', [ContactsController::class, 'delete'])->name('contacts.delete');
    /* Route::post('/store', 'ContactsController@store')->name('contacts.store');
    Route::get('/{id}/edit', 'ContactsController@edit')->name('contacts.edit');
    Route::post('/{id}/update', 'ContactsController@update')->name('contacts.update');
    Route::get('/{id}/delete', 'ContactsController@delete')->name('contacts.delete'); */
});

//Route::get('/dashboard', [ContactsController::class, 'index'])->name('contacts.index');

require __DIR__.'/auth.php';
