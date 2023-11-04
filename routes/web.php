<?php

use App\Models\Article;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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


// All articles
Route::get('/', [ArticleController::class, 'index']);


// Show upload Form
Route::get('/articles/upload', [ArticleController::class, 'upload'])->middleware('auth');;


 // Store article
Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth');


// Manage Articles
Route::get('/articles/manage', [ArticleController::class, 'manage'])->middleware('auth');



// Show Edit Form

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth');

// Update Article
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth');



// Create A New User

Route::post('/users', [UserController::class, 'store']);






// Show Register/Create Form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');



// Log User Out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');




// Delete Article
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->middleware('auth');



// Store file
Route::post('/upload/store', [FileController::class, 'store']);







// Log In User

Route::post('/users/authenticate', [UserController::class, 'authenticate']);



// // Single article
Route::get('/articles/{article}', [ArticleController::class, 'show']);



// Route::get('/upload', 'FileController@index');
// Route::post('/upload', 'FileController@store');


// // Update Listing

// Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');





// // Delete Listing

// Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// // single Listing

// Route::get('/listings/{listing}', [ListingController::class, 'show']);

