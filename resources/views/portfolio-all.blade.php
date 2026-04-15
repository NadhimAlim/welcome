@extends('layouts.app')

@section('title', 'Semua Project - Nadhim')

@section('content')
    <section class="py-24 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6">
            
            {{-- FITUR: Tombol Kembali Ke Beranda --}}
            <div class="mb-8">
                <a href="{{ route('home') }}" class="inline-flex items-center text-slate-400 hover:text-emerald-600 font-bold text-sm transition-colors group">
                    <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i>
                    Kembali ke Beranda
                </a>
            </div>

            <div class="mb-16">
                <span class="text-emerald-600 font-bold uppercase tracking-widest text-sm">Portfolio</span>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mt-3">Semua Project</h1>
                <p class="text-slate-500 text-lg mt-4 max-w-2xl leading-relaxed">
                    Koleksi lengkap hasil kerja nyata yang telah saya selesaikan, mulai dari sistem manajemen kompleks
                    hingga aplikasi mobile native.
                </p>
            </div>

            {{-- Filter Kategori --}}
            <div class="flex flex-wrap gap-3 mb-12">
                <button
                    class="px-6 py-2 rounded-xl bg-emerald-600 text-white font-bold shadow-lg shadow-emerald-200">Semua</button>
                <button
                    class="px-6 py-2 rounded-xl bg-white text-slate-600 border border-slate-200 font-bold hover:border-emerald-500 hover:text-emerald-600 transition-all">Web
                    System</button>
                <button
                    class="px-6 py-2 rounded-xl bg-white text-slate-600 border border-slate-200 font-bold hover:border-emerald-500 hover:text-emerald-600 transition-all">Mobile
                    App</button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                {{-- Data dari Database --}}
                @forelse ($portfolios as $item)
                    <div class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-50">
                        <div class="aspect-video overflow-hidden relative">
                            <img src="{{ asset('images/portfolio/' . $item->image) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                alt="{{ $item->title }}">
                        </div>
                        <div class="p-8">
                            <div class="flex gap-2 mb-4">
                                <span class="bg-emerald-50 text-emerald-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase">{{ $item->category }}</span>
                                @if($item->tags)
                                    <span class="bg-blue-50 text-blue-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase">{{ $item->tags }}</span>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-600 transition-colors">
                                {{ $item->title }}
                            </h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                {{ Str::limit($item->description, 100) }}
                            </p>

                            <a href="#" class="inline-flex items-center text-slate-900 font-bold text-sm border-b-2 border-emerald-500 pb-1 hover:border-slate-900 transition-all">
                                Lihat Selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <p class="text-slate-400 font-medium">Belum ada project untuk ditampilkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Ingin membangun project bersama?</h2>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="https://wa.me/628123456789"
                    class="inline-flex items-center justify-center bg-emerald-600 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-emerald-200 hover:bg-slate-900 transition-all">
                    Hubungi Saya Sekarang
                </a>
                {{-- Opsi kembali di bawah juga --}}
                
            </div>
        </div>
    </section>
@endsection