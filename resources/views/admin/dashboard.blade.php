<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Nadhim Alim</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-emerald-600 text-white w-10 h-10 flex items-center justify-center rounded-xl font-black text-xl shadow-lg shadow-emerald-200">
                    N
                </div>
                <span class="text-xl font-black tracking-tighter uppercase">
                    Admin<span class="text-emerald-600">Panel.</span>
                </span>
            </div>

            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-sm font-bold text-slate-500 hover:text-emerald-600 transition-all">Lihat Website</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-rose-50 text-rose-600 px-6 py-2 rounded-xl font-bold hover:bg-rose-600 hover:text-white transition-all text-sm">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-12">
        <div class="container mx-auto px-6">
            
            @if(session('success'))
            <div class="mb-8 bg-emerald-100 border border-emerald-400 text-emerald-700 px-6 py-4 rounded-2xl shadow-sm flex items-center animate-bounce">
                <i class="fas fa-check-circle mr-3 text-xl"></i>
                <span class="font-bold">{{ session('success') }}</span>
            </div>
            @endif

            <div class="mb-12">
                <h1 class="text-4xl font-black text-slate-900">Dashboard</h1>
                <p class="text-slate-500 mt-2 text-lg">Selamat datang kembali, <span class="text-slate-900 font-bold">Nadhim Alim</span>.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 group hover:border-emerald-500 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 text-xl group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <span class="text-slate-400 text-sm font-bold uppercase tracking-widest">Total Project</span>
                    <h2 class="text-5xl font-black text-slate-900 mt-2">{{ $totalProject ?? 0 }}</h2>
                </div>

                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 group hover:border-blue-500 transition-all duration-300">
    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 text-xl group-hover:bg-blue-600 group-hover:text-white transition-all">
        <i class="fas fa-envelope"></i>
    </div>
    <span class="text-slate-400 text-sm font-bold uppercase tracking-widest">Pesan Masuk</span>
    <h2 class="text-5xl font-black text-slate-900 mt-2">{{ $totalMessages }}</h2>
</div>

<div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 group hover:border-purple-500 transition-all duration-300">
    <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 text-xl group-hover:bg-purple-600 group-hover:text-white transition-all">
        <i class="fas fa-eye"></i>
    </div>
    <span class="text-slate-400 text-sm font-bold uppercase tracking-widest">Web Visits</span>
    <h2 class="text-5xl font-black text-slate-900 mt-2">{{ $webVisits }}</h2>
</div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-emerald-900 p-10 rounded-[3rem] text-white relative overflow-hidden shadow-2xl shadow-emerald-200">
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold mb-4">Kelola Portfolio</h2>
                        <p class="text-emerald-200 text-lg mb-8 leading-relaxed">Update hasil karyamu, ganti gambar, atau tambahkan project terbaru agar klien semakin tertarik.</p>
                        <a href="{{ route('portfolio.create') }}" class="inline-flex items-center bg-white text-emerald-900 px-8 py-4 rounded-2xl font-black hover:bg-emerald-100 transition-all">
                            <i class="fas fa-plus-circle mr-2"></i> Tambah Project Baru
                        </a>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-emerald-800 rounded-full opacity-50"></div>
                </div>

                <div class="bg-slate-900 p-10 rounded-[3rem] text-white relative overflow-hidden shadow-2xl shadow-slate-200">
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold mb-4">Kotak Masuk</h2>
                        <p class="text-slate-400 text-lg mb-8 leading-relaxed">Cek pesan dari calon klien yang masuk melalui form kontak di landing page kamu.</p>
                        <a href="#" class="inline-flex items-center bg-emerald-600 text-white px-8 py-4 rounded-2xl font-black hover:bg-emerald-500 transition-all">
                            Lihat Semua Pesan <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-slate-800 rounded-full opacity-50"></div>
                </div>
            </div>

            <div class="mt-12 bg-white rounded-[2.5rem] shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 border-b border-slate-50 flex justify-between items-center">
                    <h2 class="text-2xl font-black text-slate-900">Project Saat Ini</h2>
                    <span class="bg-emerald-50 text-emerald-600 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">
                        {{ $portfolios->count() }} Projects
                    </span>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="px-8 py-4 text-xs font-black uppercase text-slate-400 tracking-widest">Project</th>
                                <th class="px-8 py-4 text-xs font-black uppercase text-slate-400 tracking-widest">Kategori</th>
                                <th class="px-8 py-4 text-xs font-black uppercase text-slate-400 tracking-widest text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach($portfolios as $item)
                            <tr class="group hover:bg-slate-50/50 transition-all">
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="w-16 h-12 object-cover rounded-xl shadow-sm bg-slate-100">
                                        <div>
                                            <p class="font-bold text-slate-900">{{ $item->title }}</p>
                                            <p class="text-xs text-slate-400 font-medium">ID: #{{ $item->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-[10px] font-black uppercase tracking-wider">
                                        {{ $item->category }}
                                    </span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-400 hover:text-rose-600 transition-all p-2 hover:bg-rose-50 rounded-xl inline-flex items-center font-bold text-sm">
                                            <i class="fas fa-trash-alt mr-2 text-xs"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if($portfolios->isEmpty())
                            <tr>
                                <td colspan="3" class="px-8 py-12 text-center text-slate-400 italic font-medium">Belum ada project yang diupload.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <footer class="py-10 text-center text-slate-400 text-sm font-medium">
        &copy; 2026 Nadhim Alim. Admin Management System.
    </footer>

</body>
</html>