<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ContactsController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [MyController::class, 'hi']);

Route::post('/save-contacts', [ContactsController::class, 'save_contacts'])->middleware(['auth'])->name('save-contacts');

Route::get('/list-contacts', [ContactsController::class, 'list_contacts'])->middleware(['auth'])->name('list-contacts');


// using a middle ware
// Route::get('/contact/{id}', [ContactsController::class, 'view_contact'])->middleware(['auth', 'is_owner'])->name('view-contacts');

// using a gate
Route::get('/contact/{id}', [ContactsController::class, 'view_contact'])->middleware(['auth'])->name('view-contacts');


Route::get('/dashboard', function () {
    return view('create_contacts');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
