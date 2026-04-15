<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

<section class="min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-6">
        
        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-bold text-slate-500 hover:text-emerald-600 mb-6 transition-all group">
            <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Kembali ke Dashboard
        </a>

        <div class="bg-white p-8 md:p-12 rounded-[3rem] shadow-xl shadow-slate-200/60 border border-slate-100">
            <div class="mb-10 text-center md:text-left">
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Tambah Project Baru</h2>
                <p class="text-slate-500 mt-2">Pamerkan karya terbaikmu kepada dunia.</p>
            </div>
            
            <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <div>
                    <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Judul Project</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-slate-400">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <input type="text" name="title" 
                            class="w-full pl-12 pr-6 py-4 rounded-2xl border border-slate-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none bg-slate-50 font-medium" 
                            placeholder="Contoh: E-Commerce App v2.0" required>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Kategori</label>
                        <div class="relative">
                             <select name="category" class="w-full px-5 py-4 rounded-2xl border border-slate-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none bg-slate-50 font-medium appearance-none cursor-pointer">
                                <option value="Web System">Web System</option>
                                <option value="Mobile App">Mobile App</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none text-slate-400">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Tags (Teknologi)</label>
                        <input type="text" name="tags" 
                            class="w-full px-5 py-4 rounded-2xl border border-slate-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none bg-slate-50 font-medium" 
                            placeholder="Laravel, Tailwind, Flutter">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Thumbnail Project</label>
                    <div class="relative group">
                        <div class="w-full min-h-[220px] border-2 border-dashed border-slate-200 rounded-[2.5rem] flex flex-col items-center justify-center p-6 transition-all group-hover:border-emerald-500 group-hover:bg-emerald-50/30">
                            <div class="w-16 h-16 bg-white shadow-sm rounded-2xl flex items-center justify-center text-emerald-600 text-2xl mb-4 border border-slate-100 group-hover:scale-110 transition-all">
                                <i class="fas fa-image"></i>
                            </div>
                            <p class="text-sm font-bold text-slate-600">Klik untuk pilih gambar</p>
                            <p class="text-xs text-slate-400 mt-1">PNG, JPG atau WEBP (Maks. 2MB)</p>
                            <input type="file" name="image" id="imageInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required onchange="previewImage(event)">
                        </div>
                        <div id="previewContainer" class="hidden mt-4">
                            <img id="imagePreview" class="w-full h-48 object-cover rounded-2xl border border-slate-100">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-3 ml-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="4" 
                        class="w-full px-5 py-4 rounded-2xl border border-slate-100 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none bg-slate-50 font-medium resize-none" 
                        placeholder="Jelaskan sedikit tentang project ini..." required></textarea>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-emerald-600 text-white py-5 rounded-[2rem] font-black text-lg shadow-xl shadow-emerald-100 hover:bg-slate-900 hover:shadow-slate-200 hover:-translate-y-1 transition-all duration-300">
                        <i class="fas fa-rocket mr-2"></i> Publikasikan Project
                    </button>
                </div>
            </form>
        </div>

        <p class="text-center text-slate-300 text-sm mt-10 font-medium">
            &copy; 2026 Admin Management System • Nadhim Alim
        </p>
    </div>
</section>

<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        reader.onload = function(){
            const dataURL = reader.result;
            const preview = document.getElementById('imagePreview');
            const container = document.getElementById('previewContainer');
            preview.src = dataURL;
            container.classList.remove('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>

</body>
</html>