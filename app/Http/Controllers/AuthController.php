<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Portfolio; 
use App\Models\Contact;
use App\Models\User; // <-- Pastikan ini ada

class AuthController extends Controller
{
    /**
     * Tampilkan Halaman Login
     */
    public function showLogin() {
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }
        return view('auth.login');
    }

    /**
     * Proses Login
     */
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Tampilkan Form Register Admin
     */
    public function showRegister() {
        // Jika hanya ingin admin yang sudah login yang bisa menambah admin lain,
        // aktifkan pengecekan Auth di sini atau lewat middleware di routes.
        return view('auth.register');
    }

    /**
     * Proses Simpan Admin Baru
     */
    public function register(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Admin baru berhasil didaftarkan! Silahkan login.');
    }

    /**
     * Tampilkan Dashboard Utama
     */
    public function dashboard() {
        $totalProject = Portfolio::count();
        $totalMessages = Contact::count(); 
        $webVisits = "1.2k"; 

        $portfolios = Portfolio::latest()->get(); 
        
        return view('admin.dashboard', compact(
            'totalProject', 
            'portfolios', 
            'totalMessages', 
            'webVisits'
        ));
    }

    /**
     * Proses Logout
     */
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}