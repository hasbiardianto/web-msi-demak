<?php
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PengurusController;
use App\Models\Kontak;
use Illuminate\Support\Facades\Route;


use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class,'Dashboard'])->middleware(['auth']);

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('tentangKami',[HomeController::class, 'tentangKami']);
Route::get('tentangKamiDemak',[HomeController::class, 'tentangKamiDemak']);
Route::get('berita',[HomeController::class, 'berita']);
Route::get('detail',[HomeController::class, 'detail']);

//data
Route::resource('data', DataController::class)->middleware('auth');

//berita
Route::get('/slider/{id}', [SliderController::class, 'show'])->name('slider.show');

//kontak
Route::resource('kontak', KontakController::class);

//pengurus
Route::resource('pengurus', PengurusController::class)->middleware('auth');
Route::get('/pengurus/{id}', [PengurusController::class, 'delete'])->name('pengurus.destroy');
Route::put('/pengurus/{id}', [PengurusController::class, 'update'])->name('pengurus.update');


