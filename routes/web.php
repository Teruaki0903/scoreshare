<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CategoryController;   //追加

use App\Http\Controllers\UserController;

use App\Http\Controllers\CommentController; //コメント

use App\Http\Controllers\RankingController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [PostController::class, 'index']);

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', [UserController::class, 'index']);
    
    //Route::get('/', [PostController::class, 'index']);
    Route::get('/posts/create', [PostController::class, 'create']);
    
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    
    Route::post('/posts/{post}/increase-rating', [PostController::class, 'increaseRating'])->name('posts.increaseRating');
    
    //Route::get('/posts/{post}', [PostController::class ,'show']);
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); // ここで名前を付ける
    // '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);

    Route::delete('/posts/{post}', [PostController::class,'delete']);

    Route::get('/posts/create', [PostController::class, 'create']);  //投稿フォームの表示
    Route::post('/posts', [PostController::class, 'store']);  //画像を含めた投稿の保存処理
    //Route::get('/posts/{post}', [PostController::class, 'show']); //投稿詳細画面の表示

    Route::get('/categories/{category}', [CategoryController::class,'index']);
    
    
    Route::get('/ranking/{name}', [RankingController::class, 'show']);
    Route::get('/ranking', [RankingController::class, 'index']);
    
    
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
});