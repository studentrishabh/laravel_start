<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;

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


// crud type 

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');            // View all posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');    // Show create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');            // Store new post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');          // Show specific post
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');     // Edit form
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');      // Update specific post
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Delete post via AJAX
