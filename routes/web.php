<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/signin', [UserController::class, 'showSignin'])->name('signin');
Route::post('/signin', [UserController::class, 'signin'])->name('signin.process');

Route::get('/signup', [UserController::class, 'showSignup'])->name('signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup.process');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/{blogId}', function ($blogId) {
    $category = request()->query('category', 'general');
    return "Blog ID: $blogId, Category: $category";
})->name('blog.single');

Route::get('/', function () {
    return 'Main Application Page';
})->name('home');

Route::get('/category/{slug}', function ($slug) {
    return 'List of articles in category with slug: ' . $slug;
})->name('category');

Route::get('/author/{username}', function ($username) {
    return 'List of articles by author with username: ' . $username;
})->name('author');

Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
})->name('privacy-policy');