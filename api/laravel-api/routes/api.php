<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get("/books", function () {
    return ["book1", "book2", "book3"];
});

//Route::post('/create', [BlogPostController::class, 'create']);

Route::prefix('posts')->middleware(['middleware' => 'api'])->group(function () {
    # 投稿作成
    Route::post('/create', [PostController::class, 'create']);
    # 投稿一覧表示
    Route::get('/', [PostController::class, 'index']);
    # 投稿表示
    Route::get('/{id}', [PostController::class, 'show']);
    # 投稿編集
    Route::patch('/update/{id}' , [PostController::class, 'update']);
    # 投稿削除
    Route::delete('/{id}', [PostController::class, 'delete']);
});
