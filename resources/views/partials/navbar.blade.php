<nav class="bg-white/90 backdrop-blur-lg shadow-sm border-b border-slate-100 sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="flex items-center space-x-2">
            <div class="bg-emerald-600 text-white w-8 h-8 flex items-center justify-center rounded-lg font-black text-xl shadow-lg shadow-emerald-200">
                N</div>
            <span class="text-xl font-extrabold tracking-tighter text-slate-900 uppercase">
                Nadhim<span class="text-emerald-600">Alim.</span>
            </span>
        </a>

        <div class="hidden md:flex items-center space-x-10">
            <a href="#fitur" class="text-sm font-bold text-slate-600 hover:text-emerald-600 tracking-wide uppercase transition-all duration-300 relative group">
                Layanan
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#harga" class="text-sm font-bold text-slate-600 hover:text-emerald-600 tracking-wide uppercase transition-all duration-300 relative group">
                Biaya
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#testimoni" class="text-sm font-bold text-slate-600 hover:text-emerald-600 tracking-wide uppercase transition-all duration-300 relative group">
                Testimoni
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </div>

        <div class="flex items-center space-x-3 md:space-x-4">
            <a href="{{ route('login') }}" 
                class="hidden sm:inline-flex items-center justify-center w-10 h-10 rounded-full border border-slate-200 text-slate-500 hover:text-emerald-600 hover:border-emerald-500 transition-all duration-300 group"
                title="Login Admin">
                <i class="fas fa-user-shield transition-transform group-hover:scale-110"></i>
            </a>

            <a href="https://wa.me/628123456789"
                class="hidden sm:inline-flex bg-slate-900 text-white px-7 py-3 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-widest hover:bg-emerald-600 hover:shadow-xl hover:shadow-emerald-200 transition-all duration-300 active:scale-95">
                Mulai Project
            </a>

            <button class="md:hidden text-slate-900 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>