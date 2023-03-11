<?php

use App\Http\Controllers\formaduancontroller;
use App\Http\Controllers\BASTcontroller;
use App\Http\Controllers\formpengembaliancontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\fperangkatcontroller;
use App\Http\Controllers\funitcontroller;
use App\Http\Controllers\fmtcontroller;
use App\Http\Controllers\fmspcontroller;
use App\Http\Controllers\crudaduancontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\kembaliController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\pkController;
use App\Http\Controllers\ukController;
use App\Http\Controllers\mtController;
use App\Http\Controllers\mspController;
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

Route::get('coba', [cobaController::class, 'index']); //tampilanlpbast
Route::post('store-coba', [cobaController::class, 'store']);
Route::post('edit-coba', [cobaController::class, 'edit']);
Route::post('delete-coba', [cobaController::class, 'destroy']);


Route::get('kembali', [kembaliController::class, 'index']); //tampilanlpkembali
Route::post('store-kembali', [kembaliController::class, 'store']);
Route::post('edit-kembali', [kembaliController::class, 'edit']);
Route::post('delete-kembali', [kembaliController::class, 'destroy']);


Route::get('pengguna', [penggunaController::class, 'index']); //tampilanlpuser
Route::post('store-pengguna', [penggunaController::class, 'store']);
Route::post('edit-pengguna', [penggunaController::class, 'edit']);
Route::post('delete-pengguna', [penggunaController::class, 'destroy']);

Route::get('/FB1', function () {
    return view('FB1');
});
Route::post('Halaman/formBAST', [BASTcontroller::class, 'save']);

Route::get('/Fpengembalian', function () {
    return view('Fpengembalian');
});
Route::post('Halaman/formpengembalian', [formpengembaliancontroller::class, 'save']);

Route::get('/user', function () {
    return view('user');
});
Route::post('Halaman/user', [usercontroller::class, 'save']);

Route::get('/Fperangkat', function () {
    return view('Fperangkat');
});

Route::get('/unitkerja', function () {
    return view('unitkerja');
});

Route::get('/fmt', function () {
    return view('fmt');
});

Route::get('/fmsp', function () {
    return view('fmsp');
});

// Route Tampilan Web Awal
Route::get('/', function () {
    return view('/Halaman/beranda');
});

// Route Tampilan sesudah login
Route::get('/awal', function () {
    return view('/Halaman/awal');
});

// Route Tampilan Form BAST
Route::get('/BAST', function () {
    return view('BAST');
});

// Route Tampilan master
Route::get('/master', function () {
    return view('master');
});


// Route Form Status Aduan
Route::get('/form/statusaduan', function () {
    return view('/form/statusaduan');
});

// Route Form Aduan
Route::get('/form/formaduan', function () {
    return view('/form/formaduan');
});

Route::post('/Halaman/formaduan', [formaduancontroller::class,'save']);


// Route Crud Aduan
Route::get('Aduan', [crudaduancontroller::class, 'index']); //tampilanlpbast
Route::post('store-Aduan', [crudaduancontroller::class, 'store']);
Route::post('edit-Aduan', [crudaduancontroller::class, 'edit']);
Route::post('delete-Aduan', [crudaduancontroller::class, 'destroy']);

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'postLogin']);
Route::post('/register',[LoginController::class,'registeruser'])->name('register');


Route::get('/forgot',[LoginController::class,'forgot'])->name('forgot');
Route::get('/recover',[LoginController::class,'recover'])->name('recover');
Route::post('/recoverpassword',[LoginController::class,'recoverpassword'])->name('recoverpassword');

Route::get('pk', [pkController::class, 'index']); //tampilanlpuser
Route::post('store-pk', [pkController::class, 'store']);
Route::post('edit-pk', [pkController::class, 'edit']);
Route::post('delete-pk', [pkController::class, 'destroy']);
Route::post('Halaman/formperangkat', [fperangkatcontroller::class, 'save']);

Route::get('uk', [ukController::class, 'index']); //tampilanuk
Route::post('store-uk', [ukController::class, 'store']);
Route::post('edit-uk', [ukController::class, 'edit']);
Route::post('delete-uk', [ukController::class, 'destroy']);
Route::post('Halaman/formunit', [funitcontroller::class, 'save']);

Route::get('mt', [mtController::class, 'index']); //tampilanmt
Route::post('store-mt', [mtController::class, 'store']);
Route::post('edit-mt', [mtController::class, 'edit']);
Route::post('delete-mt', [mtController::class, 'destroy']);
Route::post('Halaman/formmt', [fmtcontroller::class, 'save']);

Route::get('msp', [mspController::class, 'index']); //tampilanmsp
Route::post('store-msp', [mspController::class, 'store']);
Route::post('edit-msp', [mspController::class, 'edit']);
Route::post('delete-msp', [mspController::class, 'destroy']);
Route::post('Halaman/formmsp', [fmspcontroller::class, 'save']);