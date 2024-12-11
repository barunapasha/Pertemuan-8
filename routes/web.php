<?php
use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return 'Halaman form sign in';
});
Route::post('/signin', function () {
    return 'Memproses data sign in';
});
Route::get('/signup', function () {
    return 'Halaman form sign up';
});
Route::post('/signup', function () {
    return 'Memproses data sign up';
});
Route::get('/', function () {
    return 'Halaman utama aplikasi';
});
Route::get('/blog', function () {
    return 'Daftar artikel blog';
}); 
Route::get('/blog/{blogId}', function ($blogId) {
    $category = request()->query('category', 'general');
    return "Blog ID: $blogId, Category: $category";
}); 
Route::get('/category/{slug}', function ($slug) {
    return 'Daftar artikel dalam kategori dengan slug: ' . $slug;
});
Route::get('/author/{username}', function ($username) {
    return 'Daftar artikel yang ditulis oleh penulis dengan username: ' . $username;
});
Route::get('/privacy-policy', function () {
    return 'Halaman kebijakan privasi';
});
