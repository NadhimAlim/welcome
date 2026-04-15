<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadhim Alim - Jasa Web Profesional Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">

    @extends('layouts.app')

    @section('content')
        <header class="container mx-auto px-6 py-8 md:py-12 -mt-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 space-y-5">
                    <div class="flex gap-2">
                        <span
                            class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded text-[10px] md:text-xs font-semibold border border-emerald-100 uppercase tracking-wider">Terpercaya
                            Sejak 2024</span>
                        <span
                            class="bg-blue-50 text-blue-600 px-3 py-1 rounded text-[10px] md:text-xs font-semibold border border-blue-100 uppercase tracking-wider">100+
                            Proyek Selesai</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-extrabold leading-[1.15] text-slate-900 tracking-tight">
                        <span class="text-emerald-600">Nadhim Alim</span> - Jasa Pembuatan Website Profesional
                    </h1>

                    <p class="text-slate-600 text-lg leading-relaxed max-w-xl">
                        Spesialis **Jasa Pembuatan Website Profesional** dan **Pengembangan Sistem Custom** untuk mahasiswa
                        dan UMKM. Solusi terintegrasi dengan garansi hasil, harga transparan, dan dukungan penuh.
                    </p>

                    <div class="grid grid-cols-2 gap-y-3 gap-x-6 py-2">
                        <div class="flex items-center text-slate-700 font-semibold text-sm">
                            <i class="fas fa-check-circle text-emerald-500 mr-2.5"></i> SEO-Optimized
                        </div>
                        <div class="flex items-center text-slate-700 font-semibold text-sm">
                            <i class="fas fa-check-circle text-emerald-500 mr-2.5"></i> Mobile-Friendly
                        </div>
                        <div class="flex items-center text-slate-700 font-semibold text-sm">
                            <i class="fas fa-check-circle text-emerald-500 mr-2.5"></i> Keamanan HTTPS
                        </div>
                        <div class="flex items-center text-slate-700 font-semibold text-sm">
                            <i class="fas fa-check-circle text-emerald-500 mr-2.5"></i> Loading Cepat
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="https://wa.me/628123456789"
                            class="bg-emerald-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-200 text-center active:scale-95 transition-all">
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#harga"
                            class="bg-white text-slate-900 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 border border-slate-200 transition text-center active:scale-95 transition-all">
                            Lihat Portfolio
                        </a>
                    </div>

                    <div class="flex items-center space-x-3 pt-2">
                        <div class="flex text-yellow-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-xs text-slate-500 font-bold uppercase tracking-widest">4.9/5 dari 200+ review klien
                        </p>
                    </div>
                </div>

                <div class="md:w-1/2 relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-[12px] border-white">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                            alt="Team Work" class="w-full h-auto object-cover">
                    </div>

                    <div
                        class="absolute -bottom-4 -left-4 bg-white py-4 px-6 rounded-2xl shadow-2xl flex items-center space-x-3 border border-slate-50">
                        <div class="relative flex h-3 w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </div>
                        <span class="text-sm font-black text-slate-800 tracking-tight">Trusted by 100+ Clients</span>
                    </div>
                </div>
            </div>
        </header>

        <section id="fitur" class="bg-slate-50 py-24 border-b border-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-6">Layanan Nadhim Alim</h2>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Kami menyediakan solusi digital lengkap dan terintegrasi untuk transformasi bisnis Anda.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 items-stretch">

                    <div
                        class="bg-white p-8 md:p-10 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="mb-8 p-4 rounded-2xl bg-emerald-50 text-emerald-600 transition-colors duration-500 group-hover:bg-emerald-600 group-hover:text-white">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Jasa Pembuatan Website</h3>
                        <p class="text-slate-500 mb-8 leading-relaxed text-sm flex-grow">
                            Layanan pembuatan website profesional dengan desain custom, optimasi SEO, dan teknologi terkini
                            untuk kredibilitas bisnis Anda.
                        </p>
                        <div class="w-full">
                            <ul class="space-y-4 mb-10 text-left border-t border-slate-50 pt-8">
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Desain Custom
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> SEO Optimized
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Mobile Friendly
                                </li>
                            </ul>
                            <a href="#"
                                class="block w-full py-3 px-6 border border-emerald-600 text-emerald-600 font-bold rounded-xl hover:bg-emerald-600 hover:text-white transition-all duration-300">Konsultasi
                                Gratis</a>
                        </div>
                    </div>

                    <div
                        class="bg-white p-8 md:p-10 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="mb-8 p-4 rounded-2xl bg-emerald-50 text-emerald-600 transition-colors duration-500 group-hover:bg-emerald-600 group-hover:text-white">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Jasa Pembuatan Aplikasi Web</h3>
                        <p class="text-slate-500 mb-8 leading-relaxed text-sm flex-grow">
                            Pengembangan aplikasi web custom yang dirancang khusus sesuai kebutuhan bisnis dengan fitur
                            lengkap dan interface user-friendly.
                        </p>
                        <div class="w-full">
                            <ul class="space-y-4 mb-10 text-left border-t border-slate-50 pt-8">
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Fitur Custom
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Database Aman
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Responsive Design
                                </li>
                            </ul>
                            <a href="#"
                                class="block w-full py-3 px-6 border border-emerald-600 text-emerald-600 font-bold rounded-xl hover:bg-emerald-600 hover:text-white transition-all duration-300">Konsultasi
                                Gratis</a>
                        </div>
                    </div>

                    <div
                        class="bg-white p-8 md:p-10 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="mb-8 p-4 rounded-2xl bg-emerald-50 text-emerald-600 transition-colors duration-500 group-hover:bg-emerald-600 group-hover:text-white">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Sistem Enterprise Custom</h3>
                        <p class="text-slate-500 mb-8 leading-relaxed text-sm flex-grow">
                            Solusi sistem terintegrasi seperti ERP, HRIS, dan dashboard analitik untuk mengoptimalkan
                            operasional perusahaan secara menyeluruh.
                        </p>
                        <div class="w-full">
                            <ul class="space-y-4 mb-10 text-left border-t border-slate-50 pt-8">
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Sistem ERP / HRIS
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Integrasi API
                                </li>
                                <li class="flex items-center text-slate-700 text-sm font-medium">
                                    <i class="fas fa-check text-emerald-500 mr-3 text-xs"></i> Dashboard Analitik
                                </li>
                            </ul>
                            <a href="#"
                                class="block w-full py-3 px-6 border border-emerald-600 text-emerald-600 font-bold rounded-xl hover:bg-emerald-600 hover:text-white transition-all duration-300">Konsultasi
                                Gratis</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="harga" class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-20">
                    <span class="text-emerald-600 font-bold uppercase tracking-widest text-sm">Pricing Plans</span>
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 mt-3 mb-6">Investasi Transparan</h2>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Pilih paket yang paling sesuai dengan skala kebutuhan Anda. Tanpa biaya tersembunyi, pengerjaan
                        profesional.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 items-stretch">

                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col hover:border-emerald-200 transition-all duration-500">
                        <div class="mb-8">
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-emerald-600 mb-4">Basic Solution
                            </h3>
                            <div class="text-5xl font-black text-slate-900">Rp 50<span
                                    class="text-lg font-medium text-slate-400 ml-1">rb</span></div>
                            <p class="text-slate-400 text-xs mt-4 italic font-medium">*Cocok untuk tugas kuliah sederhana
                            </p>
                        </div>

                        <ul class="text-left space-y-5 mb-12 flex-grow">
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> 1 Halaman Landing Page
                            </li>
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Domain .my.id (1 Tahun)
                            </li>
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Hosting Standar (1 Bulan)
                            </li>
                            <li class="flex items-center text-slate-300 text-sm font-medium line-through">
                                <i class="fas fa-times mr-3 text-xs"></i> Integrasi Database
                            </li>
                        </ul>

                        <a href="https://wa.me/628123456789?text=Halo+Nadhim+saya+ingin+Paket+Tugas"
                            class="block w-full py-4 bg-slate-50 text-slate-700 rounded-2xl font-bold text-center hover:bg-emerald-600 hover:text-white transition-all duration-300">Pilih
                            Paket</a>
                    </div>

                    <div
                        class="bg-slate-900 p-10 rounded-[2.5rem] shadow-[0_25px_50px_-12px_rgba(16,185,129,0.25)] border-4 border-emerald-500 relative transform md:scale-105 z-10 text-white flex flex-col">
                        <div
                            class="absolute -top-5 left-1/2 -translate-x-1/2 bg-emerald-500 text-white px-6 py-1.5 rounded-full text-[10px] font-black tracking-[0.2em] uppercase shadow-lg shadow-emerald-500/50">
                            RECOMMENDED
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-emerald-400 mb-4">Professional
                                Plan</h3>
                            <div class="text-6xl font-black text-white">Rp 150<span
                                    class="text-lg font-medium text-slate-500 ml-1">rb</span></div>
                            <p class="text-emerald-400/60 text-xs mt-4 italic font-medium">*Paling populer untuk
                                Portofolio/UMKM</p>
                        </div>

                        <ul class="text-left space-y-5 mb-12 flex-grow">
                            <li class="flex items-center text-sm font-medium text-slate-200">
                                <i class="fas fa-check text-emerald-400 mr-3"></i> Hingga 5 Halaman Custom
                            </li>
                            <li class="flex items-center text-sm font-medium text-slate-200">
                                <i class="fas fa-check text-emerald-400 mr-3"></i> Domain .my.id / .biz.id
                            </li>
                            <li class="flex items-center text-sm font-medium text-slate-200">
                                <i class="fas fa-check text-emerald-400 mr-3"></i> Hosting Power (1 Tahun)
                            </li>
                            <li class="flex items-center text-sm font-medium text-slate-200">
                                <i class="fas fa-check text-emerald-400 mr-3"></i> Integrasi Database MySQL
                            </li>
                            <li class="flex items-center text-sm font-medium text-slate-200">
                                <i class="fas fa-check text-emerald-400 mr-3"></i> Free Setup SSL & SEO
                            </li>
                        </ul>

                        <a href="https://wa.me/628123456789?text=Halo+Nadhim+saya+ingin+Paket+Portofolio"
                            class="block w-full py-4 bg-emerald-600 text-white rounded-2xl font-bold text-center hover:bg-emerald-500 shadow-xl shadow-emerald-900/20 transition-all duration-300">Mulai
                            Sekarang</a>
                    </div>

                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col hover:border-emerald-200 transition-all duration-500">
                        <div class="mb-8">
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-emerald-600 mb-4">Custom
                                Enterprise</h3>
                            <div class="text-4xl font-black text-slate-900">Custom</div>
                            <p class="text-slate-400 text-xs mt-4 italic font-medium">*Sesuai kompleksitas project</p>
                        </div>

                        <ul class="text-left space-y-5 mb-12 flex-grow">
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Full Request Fitur & Sistem
                            </li>
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Domain .com / .id Profesional
                            </li>
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Cloud Hosting High Performance
                            </li>
                            <li class="flex items-center text-slate-600 text-sm font-medium">
                                <i class="fas fa-check text-emerald-500 mr-3"></i> Support & Revisi Prioritas
                            </li>
                        </ul>

                        <a href="https://wa.me/628123456789?text=Halo+Nadhim+saya+ingin+tanya+Paket+Custom"
                            class="block w-full py-4 bg-slate-900 text-white rounded-2xl font-bold text-center hover:bg-emerald-600 transition-all duration-300">Tanya
                            Detail</a>
                    </div>
                </div>

                <p class="text-center mt-12 text-slate-400 text-sm font-medium">
                    <i class="fas fa-shield-alt mr-2 text-emerald-500"></i> Garansi uang kembali jika project tidak selesai
                    sesuai deadline.
                </p>
            </div>
        </section>

        <section id="portofolio" class="py-24 bg-slate-50">
    <div class="container mx-auto px-6">

        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-emerald-600 font-bold uppercase tracking-widest text-sm">Selected Works</span>
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 mt-3">Project Terbaru</h2>
                <p class="text-slate-500 text-lg mt-4 leading-relaxed">
                    Hasil kerja nyata yang telah membantu klien mencapai tujuan digital mereka.
                </p>
            </div>

            <div class="flex flex-wrap gap-2">
                <button class="px-5 py-2 rounded-full bg-emerald-600 text-white text-sm font-bold shadow-lg shadow-emerald-100">Semua</button>
                <button class="px-5 py-2 rounded-full bg-white text-slate-600 border border-slate-200 text-sm font-bold hover:border-emerald-500 hover:text-emerald-600 transition-all">Web System</button>
                <button class="px-5 py-2 rounded-full bg-white text-slate-600 border border-slate-200 text-sm font-bold hover:border-emerald-500 hover:text-emerald-600 transition-all">Mobile App</button>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            {{-- LOOPING DATA: Maksimal 3 karena sudah dibatasi di Route --}}
            @foreach ($portfolios as $project)
                <div class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-50">
                    <div class="aspect-video overflow-hidden relative">
                        <div class="absolute top-4 left-4 z-10">
                            <span class="bg-emerald-500 text-white text-[10px] font-bold px-3 py-1 rounded-lg shadow-lg uppercase">
                                {{ $project->category }}
                            </span>
                        </div>
                        <img src="{{ asset('images/portfolio/' . $project->image) }}" alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>

                    <div class="p-8">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-emerald-50 text-emerald-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                {{ $project->tags ?? $project->category }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-600 transition-colors">
                            {{ $project->title }}
                        </h3>

                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            {{ Str::limit($project->description, 80) }}
                        </p>

                        <div class="flex items-center justify-between border-t border-slate-50 pt-6">
                            <a href="#" class="inline-flex items-center text-slate-900 font-bold text-sm border-b-2 border-emerald-500 pb-1 hover:border-slate-900 transition-all">
                                Detail Project
                            </a>
                            <div class="flex -space-x-2">
                                <img class="w-7 h-7 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Nadhim&background=10b981&color=fff" alt="Nadhim">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Card Dummy: Hanya muncul jika data di DB kurang dari 3 --}}
            @if ($portfolios->count() < 3)
                <div class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-50 border-dashed">
                    <div class="p-8 text-center flex flex-col items-center justify-center h-full min-h-[350px]">
                        <div class="w-20 h-20 rounded-full bg-slate-50 flex items-center justify-center mb-6 group-hover:bg-emerald-50 transition-colors">
                            <i class="fas fa-plus text-2xl text-slate-300 group-hover:text-emerald-500 transition-colors"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-400">Project Selanjutnya...</h3>
                        <p class="text-slate-400 text-sm mt-2">Coming Soon</p>
                    </div>
                </div>
            @endif

        </div>

        {{-- Tombol Lihat Semua: Selalu muncul untuk mengarahkan ke halaman portfolio-all --}}
        <div class="mt-20 text-center">
            <a href="{{ route('portfolio.index') }}"
                class="inline-flex items-center gap-3 bg-slate-900 text-white px-10 py-4 rounded-2xl font-bold hover:bg-emerald-600 transition-all shadow-xl shadow-slate-200">
                Lihat Semua Project
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>

    </div>
</section>
    @endsection

</body>

</html>
