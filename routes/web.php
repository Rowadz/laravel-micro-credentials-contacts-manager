<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ContactsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactsController::class, 'create_contacts_view'])->name('home');


Route::get('/test', [MyController::class, 'hi']);

Route::post('/save-contacts', [ContactsController::class, 'save_contacts'])->name('save-contacts');

Route::get('/list-contacts', [ContactsController::class, 'list_contacts'])->name('list-contacts');


// Route::get('/create-contacts', [ContactsController::class, 'create_contacts_view']);
