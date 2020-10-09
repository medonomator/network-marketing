<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NotesController;
use App\Http\Controllers\LoginController;

// Artisan::call('migrate');
// Artisan::call('db:seed --class=UserSeeder');
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

Route::get('/', [NotesController::class, 'random']);

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/greenway', function () {
    return view('greenway');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/admin', [AdminController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/notes', [NotesController::class, 'index']);
    Route::get('/admin/notes/create', function () {
        return view('admin.notes-create');
    });

    Route::post('/admin/notes/create', [NotesController::class, 'store']);
    Route::get('/admin/notes/delete/{id}', [NotesController::class, 'destroy']);
});

Route::get('/admin/{any}', [AdminController::class, 'index']);
