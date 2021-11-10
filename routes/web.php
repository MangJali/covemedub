<?php

use App\Http\Controllers\artikel;
use App\Http\Controllers\beranda;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\rumah_sakit;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
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
Route::get('/listartikel', [artikel::class, 'listartikel']);
Route::get('/artikel/{id}', [artikel::class, 'index']);
Route::get('/video/{id}', [VideoController::class, 'index']);
Route::get('/poster/{id}', [PosterController::class, 'index']);
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::post('/admin/rumahsakit/create', [rumah_sakit::class, 'create']);
    Route::delete('/admin/rumahsakit/remove/{id}', [rumah_sakit::class, 'remove']);
    Route::put('/admin/rumahsakit/edit/{id}', [rumah_sakit::class, 'edit']);
    
    Route::post('/admin/artikel/create', [artikel::class, 'create']);
    Route::delete('/admin/artikel/remove/{id}', [artikel::class, 'remove']);
    Route::put('/admin/artikel/edit/{id}', [artikel::class, 'edit']);

    Route::post('/admin/video/create', [VideoController::class, 'create']);
    Route::delete('/admin/video/remove/{id}', [VideoController::class, 'remove']);
    Route::put('/admin/video/edit/{id}', [VideoController::class, 'edit']);

    Route::post('/admin/poster/create', [PosterController::class, 'create']);
    Route::delete('/admin/poster/remove/{id}', [PosterController::class, 'remove']);
    Route::put('/admin/poster/edit/{id}', [PosterController::class, 'edit']);
    
    Route::post('/admin/slider/create', [SliderController::class, 'create']);
    Route::delete('/admin/slider/remove/{id}', [SliderController::class, 'remove']);
    Route::put('/admin/slider/edit/{id}', [SliderController::class, 'edit']);

    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/artikel', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/rumahsakit', [App\Http\Controllers\HomeController::class, 'rumahsakit'])->name('admin');
    Route::get('/admin/video', [App\Http\Controllers\HomeController::class, 'video'])->name('admin');
    Route::get('/admin/poster', [App\Http\Controllers\HomeController::class, 'poster'])->name('admin');
    Route::get('/admin/slider', [App\Http\Controllers\HomeController::class, 'slider'])->name('admin');
});
// Route::any('/register', function () {
//     abort(403);
// });
Route::any('/password/reset', function () {
    abort(403);
});
