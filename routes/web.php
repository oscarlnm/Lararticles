<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

// Mostrar post
/*Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

//Crear
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Mostrar después de crear post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//EDIT
// PUT o PATCH sirven para actualizar
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

//DELETE
Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.destroy');*/
