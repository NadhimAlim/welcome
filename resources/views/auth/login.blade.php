<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Nadhim</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 w-full max-w-md">
        <div class="text-center mb-10">
            <div class="bg-emerald-600 text-white w-12 h-12 flex items-center justify-center rounded-xl font-black text-2xl shadow-lg shadow-emerald-200 mx-auto mb-4">N</div>
            <h1 class="text-2xl font-black text-slate-900">Admin Login</h1>
            <p class="text-slate-500 text-sm">Silahkan masuk untuk mengelola portfolio</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Email Address</label>
                <input type="email" name="email" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all" placeholder="admin@nadhim.com" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                <input type="password" name="password" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all" placeholder="••••••••" required>
            </div>
            
            @if($errors->any())
                <p class="text-red-500 text-xs font-bold">{{ $errors->first() }}</p>
            @endif

            <button type="submit" class="w-full bg-slate-900 text-white py-4 rounded-xl font-bold hover:bg-emerald-600 transition-all shadow-lg">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</body>
</html>