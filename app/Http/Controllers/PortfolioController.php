<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File; // Gunakan File untuk menghapus di folder public root

class PortfolioController extends Controller
{
    /**
     * Tampilkan form tambah portfolio
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Proses Simpan ke Database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required',
        ]);

        // Proses Simpan Gambar ke public/images/portfolio
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images/portfolio'), $imageName);

        Portfolio::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'image'       => $imageName,
            'description' => $request->description,
            'tags'        => $request->tags ?? $request->category,
        ]);

        return redirect()->route('dashboard')->with('success', 'Mantap! Project baru berhasil dipajang.');
    }

    /**
     * Proses Hapus Data & File Gambar
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        
        // Lokasi file gambar
        $imagePath = public_path('images/portfolio/' . $portfolio->image);
        
        // Cek jika file ada, lalu hapus menggunakan File::delete
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        
        // Hapus data dari database
        $portfolio->delete();

        return redirect()->route('dashboard')->with('success', 'Project berhasil dihapus secara permanen!');
    }
}