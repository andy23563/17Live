<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * 文章相關
 * /api/v1/posts
 */
Route::group([
    'prefix' => 'v1'
], function () {
    Route::group(["prefix" => "posts"], function () {
        Route::post('/new', [PostController::class, 'createPost']);
    });
});

/**
 * 留言相關
 * /api/v1/comment
 */
Route::group([
    'prefix' => 'v1'
], function () {
    Route::group(["prefix" => "comment"], function () {
        Route::post('/new', [CommentController::class, 'createMessage'])->middleware(['postsExists']);
    });
});
