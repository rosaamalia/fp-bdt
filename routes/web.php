<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PublishController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', [function () {
    return view('index');
}])->name('index');

Route::get('/portfolio', [function () {
    return view('portfolio');
}])->name('portfolio');

Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest')->name('daftar');
Route::post('/daftar', [RegisterController::class, 'daftar']);

Route::get('/masuk', [LoginController::class, 'index'])->middleware('guest')->name('masuk');
Route::post('/masuk', [LoginController::class, 'masuk']);
Route::post('/keluar', [LoginController::class, 'keluar']);

Route::get('/blog', [function () {
    return view('blog');
}])->name('blog');

Route::get('/faq', [function () {
    return view('faq');
}])->name('faq');

Route::get('/review', [ReviewController::class, 'index'])->name('review');

Route::name('order')->prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->middleware('auth');

    Route::get('/buat/ulangtahun', [OrderController::class, 'buatUlangTahun'])->middleware('auth');
    Route::post('/buat/ulangtahun', [OrderController::class, 'buatUndanganUlangTahun']);
    Route::get('/undangan/ulangtahun/{id}/edit', [OrderController::class, 'editUlangTahun'])->middleware('auth');
    Route::post('/undangan/ulangtahun/{id}/edit', [OrderController::class, 'editUndanganUlangTahun']);
    Route::get('/undangan/ulangtahun/{id}/preview', [OrderController::class, 'previewUlangTahun'])->middleware('auth');
    Route::get('/undangan/ulangtahun/review/{id}', [OrderController::class, 'reviewUlangTahun'])->middleware('auth');
    Route::post('/undangan/ulangtahun/review/{id}', [OrderController::class, 'reviewUndanganUlangTahun']);
    Route::get('/undangan/ulangtahun/{id}/bukutamu', [OrderController::class, 'tamuUlangTahun'])->middleware('auth');

    Route::get('/buat/pernikahan', [OrderController::class, 'buatPernikahan'])->middleware('auth');
    Route::post('/buat/pernikahan', [OrderController::class, 'buatUndanganPernikahan']);
    Route::get('/undangan/pernikahan/{id}/edit', [OrderController::class, 'editPernikahan'])->middleware('auth');
    Route::post('/undangan/pernikahan/{id}/edit', [OrderController::class, 'editUndanganPernikahan']);
    Route::get('/undangan/pernikahan/review/{id}', [OrderController::class, 'reviewPernikahan'])->middleware('auth');
    Route::post('/undangan/pernikahan/review/{id}', [OrderController::class, 'reviewUndanganPernikahan']);
    Route::get('/undangan/pernikahan/{id}/preview', [OrderController::class, 'previewPernikahan'])->middleware('auth');
    Route::get('/undangan/pernikahan/{id}/bukutamu', [OrderController::class, 'tamuPernikahan'])->middleware('auth');

    Route::get('/undangan/pembayaran/{id}', [PembayaranController::class, 'pembayaran'])->middleware('auth');
    Route::patch('/undangan/pembayaran/{id}', [PembayaranController::class, 'pembayaranUndangan']);

    Route::delete('/tamu/delete/{id}', [OrderController::class, 'destroyTamu']);

    Route::get('/harga', [function () {
        return view('harga');
    }]);
});

Route::get('/order/undangan/ulangtahun/{id}', [OrderController::class, 'detailUlangTahun'])->middleware('auth')->name('undangan_ulangtahun');
Route::get('/order/undangan/pernikahan/{id}', [OrderController::class, 'detailPernikahan'])->middleware('auth')->name('undangan_pernikahan');

Route::get('/akun', [AkunController::class, 'akun'])->name('akun');
Route::post('/akun', [AkunController::class, 'update']);

Route::get('/order/bukutamu', [function () {
    return view('order.bukutamu');
}])->name('bukutamu');

Route::get('/pernikahan/{slug}', [PublishController::class, 'index_pernikahan'])->name('publish_pernikahan');
Route::post('/tamu/pernikahan/{slug}', [PublishController::class, 'tamu_pernikahan']);

Route::get('/ulangtahun/{slug}', [PublishController::class, 'index_ulangtahun'])->name('publish_ulangtahun');
Route::post('/tamu/ulangtahun/{slug}', [PublishController::class, 'tamu_ulangtahun']);