<?php

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

use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('api.');

Route::get('dd', function () {
    return bcrypt(123);
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('master')->group(function () {
        Route::resource('arsip', App\Http\Controllers\TmarsipController::class);
        Route::resource('disposisi', App\Http\Controllers\TmdisposisiController::class);
        Route::resource('jabatan', App\Http\Controllers\TmjabatanController::class);
        Route::resource('lokasi', App\Http\Controllers\TmlokasiController::class);
        Route::resource('satuan', App\Http\Controllers\TmsatuanController::class);
        Route::resource('sppd', App\Http\Controllers\TmsppdController::class);
        Route::resource('suratkeluar', App\Http\Controllers\TmsuratkeluarController::class);
        Route::resource('suratmasuk', App\Http\Controllers\TmsuratmasukController::class);
        Route::resource('jenisarsip', App\Http\Controllers\TrjenisarsipController::class);
        Route::resource('sifatsurat', App\Http\Controllers\TrsifatsuratController::class);
        Route::resource('pegawai', App\Http\Controllers\TmpegawaiController::class);
    });
    // using datatable
    Route::prefix('api')->group(function () {
        Route::post('arsip', [App\Http\Controllers\TmarsipController::class, 'api'])->name('api.arsip');
        Route::get('disposisi', [App\Http\Controllers\TmdisposisiController::class, 'api'])->name('api.disposisi');
        Route::post('jabatan', [App\Http\Controllers\TmjabatanController::class, 'api'])->name('api.jabatan');
        Route::post('lokasi', [App\Http\Controllers\TmlokasiController::class, 'api'])->name('api.lokasi');
        Route::post('satuan', [App\Http\Controllers\TmsatuanController::class, 'api'])->name('api.satuan');
        Route::post('sppd', [App\Http\Controllers\TmsppdController::class, 'api'])->name('api.sppd');
        Route::post('suratkeluar', [App\Http\Controllers\TmsuratkeluarController::class, 'api'])->name('api.suratkeluar');
        Route::post('suratmasuk', [App\Http\Controllers\TmsuratmasukController::class, 'api'])->name('api.suratmasuk');
        Route::post('jenisarsip', [App\Http\Controllers\TrjenisarsipController::class, 'api'])->name('api.jenisarsip');
        Route::post('sifatsurat', [App\Http\Controllers\TrsifatsuratController::class, 'api'])->name('api.sifatsurat');
        Route::post('pegawai', [App\Http\Controllers\TmpegawaiController::class, 'api'])->name('api.pegawai');
    });

    Route::get('qr', function () {
        $pngImage = QrCode::format('png')->merge('C:\wamp64\www\arsipsurat\public\assets\img\8907917568.png', 0.3, true)
            ->size(500)->errorCorrection('H')
            ->generate('Welcome to kerneldev.com!');

        return response($pngImage)->header('Content-type', 'image/png');
    });

    Route::prefix('setting')->group(function () {
        Route::resource('menuapp', App\Http\Controllers\Tmmenu_appController::class);
        Route::get('menuapp_app', [App\Http\Controllers\Tmmenu_appController::class, 'api'])->name('menuapp_app');
        Route::get('icon', [App\Http\Controllers\Tmmenu_appController::class, 'listIcon'])->name('icon.list');

        // Route::resource('hakases', App\Http\Controllers\UserController::class);
        // Route::resource('masterjabatan', UserController::class);
        // Route::resource('disposisi', UserController::class);


    });
});
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
