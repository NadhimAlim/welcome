@extends('layouts.app')

@section('title', 'Tambah Admin - Nadhim Dashboard')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-slate-50 py-12 px-4">
    
    <div class="mb-6">
        <a href="{{ route('dashboard') }}" class="text-slate-400 hover:text-emerald-600 font-bold text-sm transition-all flex items-center gap-2">
            <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-xl p-10 border border-slate-100 transition-all hover:shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl mb-4 text-2xl">
                <i class="fas fa-user-plus"></i>
            </div>
            <h2 class="text-3xl font-black text-slate-900">Tambah Admin</h2>
            <p class="text-slate-500 mt-2">Buat akun pengelola baru dengan akses penuh</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-xl">
                <ul class="list-disc list-inside text-sm text-red-600 font-medium">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 ml-1">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" 
                        class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none @error('name') border-red-400 @enderror" 
                        placeholder="Masukkan nama lengkap" required autofocus>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 ml-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none @error('email') border-red-400 @enderror" 
                        placeholder="admin@example.com" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 ml-1">Password</label>
                    <input type="password" name="password" 
                        class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none @error('password') border-red-400 @enderror" 
                        placeholder="Minimal 8 karakter" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 ml-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" 
                        class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none" 
                        placeholder="Ulangi password" required>
                </div>

                <button type="submit" class="w-full bg-slate-900 text-white font-bold py-4 rounded-2xl hover:bg-emerald-600 transition-all shadow-lg shadow-slate-200 mt-4 flex items-center justify-center gap-2 group">
                    <span>Daftarkan Admin</span>
                    <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>
        </form>
        
        <div class="mt-8 text-center pt-6 border-t border-slate-50">
            <p class="text-sm text-slate-400">Sudah punya akses?</p>
            <a href="{{ route('login') }}" class="inline-block mt-1 text-sm font-bold text-emerald-600 hover:text-slate-900 transition-colors">
                Silahkan Login Kembali
            </a>
        </div>
    </div>

    <p class="mt-8 text-slate-400 text-xs">
        &copy; {{ date('Y') }} Nadhim Portfolio Dashboard. All rights reserved.
    </p>
</div>
@endsection