<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CommentsController;

Route::get('/', function () {return view('welcome');});

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/posts', [PostController::class, 'allPosts'])->middleware(['auth', 'verified'])->name('posts.allPosts');
    Route::get('/myPosts', [PostController::class, 'myPosts'])->middleware(['auth', 'verified'])->name('posts.myPosts');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/', [PostController::class, 'store'])->name('posts.store');    
    // Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{post}/delite', [PostController::class, 'delite'])->name('posts.delite');

    Route::get('/users/myUser', [UserController::class, 'myUser'])->name('users.myUser');
    Route::get('/users/{user}', [UserController::class, 'getUser'])->name('users.user');

    Route::get('/subscribe', [SubscribeController::class, 'mySubscribe'])->name('subscribe');
    Route::post('/makeSubscription', [SubscribeController::class, 'makeSubscription'])->name('makeSubscription');

    Route::post('/addCommentsForPosst', [CommentsController::class, 'addCommentsForPosst'])->name('addCommentsForPosst');
});

require __DIR__.'/auth.php';
