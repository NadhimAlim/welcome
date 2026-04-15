<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;

/*
|--------------------------------------------------------------------------
| Public Routes (Bisa diakses siapa saja)
|--------------------------------------------------------------------------
*/

// Halaman Landing Page - Menampilkan 6 project terbaru
// Route::get('/', function () {
//     $portfolios = Portfolio::latest()->take(6)->get();
//     return view('welcome', compact('portfolios'));
// })->name('home');

Route::get('/', function () {
    // Ambil hanya 3 project terbaru untuk landing page
    $portfolios = Portfolio::latest()->take(3)->get();
    return view('welcome', compact('portfolios'));
})->name('home');

// Halaman Semua Portfolio
Route::get('/portfolio', function () {
    $portfolios = Portfolio::latest()->get(); 
    return view('portfolio-all', compact('portfolios'));
})->name('portfolio.index');

// Halaman Harga/Paket
Route::get('/paket', function () {
    return view('pricing');
})->name('pricing.index');


/*
|--------------------------------------------------------------------------
| Auth Routes (Login & Logout)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout bisa diakses jika sudah login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


/*
|--------------------------------------------------------------------------
| Admin Routes (Hanya untuk Nadhim / yang sudah Login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    
    // Dashboard Utama
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    
    // Kelola Portfolio (Tambah, Simpan, Hapus)
    Route::get('/dashboard/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/dashboard/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::delete('/dashboard/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

});

Route::post('/contact', function (Illuminate\Http\Request $request) {
    App\Models\Contact::create($request->all());
    return back()->with('success', 'Pesan terkirim!');
})->name('contact.send');

// Route untuk pendaftaran admin baru
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);