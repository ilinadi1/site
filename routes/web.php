<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;


Route::get('categories', [CategoryController::class, 'categories']);

Route::get('/',[PostController::class,'index']);

Route::get('/main',[PostController::class,'main']);


Route::get('/registr',function(){
    return view('registr');
});

Route::get('/signUp',function(){
    return view('signUp');
});

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/post',[PostController::class,'post']);



Route::get('/account',function(){
    return view('account');
});


Route::get('/onePost/{id}',[PostController::class,'onePost']);

Route::get('postPaginate',[PostController::class,'index']);

Route::post('/appReg',[AuthController::class,'registration']);

Route::post('/appLog',[AuthController::class,'login']);

Route::post('/admin/addPostAdmin/createPost',[PostController::class,'addPost']);

Route::group(['prefix'=>'admin', 'middleware' => 'checkRole'], function () {
    Route::get('/delete/{id}',[PostController::class,'deletePost']);
    Route::get('/edit/{id}',[PostController::class,'editPost']);
    Route::post('/updatePost',[PostController::class,'updatePost']);
    Route::get('/addPostAdmin',[PostController::class,'addPostAdmin']);
    Route::get('/',[PostController::class,'admin']);
});



Route::get('posts/{category}', [CategoryController::class, 'posts'])->name('posts');

Route::get('/{sort}', [PostController::class, 'sort']);
