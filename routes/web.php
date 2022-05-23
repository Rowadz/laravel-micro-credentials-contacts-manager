<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ContactsController;


Route::get('/', [ContactsController::class, 'create_contacts_view'])->name('home');


Route::get('/test', [MyController::class, 'hi']);

Route::post('/save-contacts', [ContactsController::class, 'save_contacts'])->name('save-contacts');

Route::get('/list-contacts', [ContactsController::class, 'list_contacts'])->name('list-contacts');


Route::get('/dashboard', function () {
    return view('create_contacts');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
