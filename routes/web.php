<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\homepage;
use App\Http\Controllers\login;
use App\Http\Controllers\rumah_sakit;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route::get('/Signin','Authcontroller@signin')->name('signin');
// route::post('/postsignin','Authcontroller@postsignin');
// route::get('/logout','Authcontroller@logout');

Route::get('/', [beranda::class, 'index']);
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/list-rumahsakit', [rumah_sakit::class, 'index']);
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/artikel', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/rumahsakit', [App\Http\Controllers\HomeController::class, 'rumahsakit'])->name('admin');
    Route::get('/admin/video', [App\Http\Controllers\HomeController::class, 'video'])->name('admin');
    Route::get('/admin/poster', [App\Http\Controllers\HomeController::class, 'poster'])->name('admin');
});
Route::any('/register', function () {
    abort(403);
});
Route::any('/password/reset', function () {
    abort(403);
});
