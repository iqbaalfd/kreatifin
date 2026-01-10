<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class FreelancerController extends Controller
{
    /**
     * Menampilkan daftar kreator (Halaman Cari Kreator)
     * Ditambahkan fitur Pagination (6 kreator per halaman).
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $freelancers = User::where('role', 'kreator')
            ->with('portofolios')
            ->when($search, function ($query) use ($search) {
                return $query->where(function($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('skill', 'like', '%' . $search . '%')
                      ->orWhere('bio', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->paginate(6); // Mengganti ->get() dengan ->paginate(6)

        // Penting: Agar keyword search tidak hilang saat klik tombol halaman selanjutnya
        $freelancers->appends(['search' => $search]);

        return view('cari-kreator', compact('freelancers', 'search'));
    }

    /**
     * Menampilkan detail satu kreator
     */
    public function show($id)
    {
        $kreator = User::with('portofolios')->findOrFail($id);
        return view('kreator-detail', compact('kreator'));
    }

    /**
     * Halaman form tambah portofolio
     */
    public function create()
    {
        return view('portofolio.create');
    }

    /**
     * Menyimpan portofolio baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Auth::user()->portofolios()->create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $imageName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Karya kerenmu berhasil dipublikasikan!');
    }

    /**
     * Menampilkan halaman edit portofolio
     */
    public function edit($id)
    {
        $portofolio = Portofolio::where('user_id', Auth::id())->findOrFail($id);
        return view('portofolio.edit', compact('portofolio'));
    }

    /**
     * Update data portofolio
     */
    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if (File::exists(public_path('images/' . $portofolio->image))) {
                File::delete(public_path('images/' . $portofolio->image));
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $portofolio->image = $imageName;
        }

        $portofolio->update([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $portofolio->image,
        ]);

        return redirect()->route('dashboard')->with('success', 'Karya berhasil diperbarui!');
    }

    /**
     * Menghapus portofolio
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::where('user_id', Auth::id())->findOrFail($id);
        
        if (File::exists(public_path('images/' . $portofolio->image))) {
            File::delete(public_path('images/' . $portofolio->image));
        }

        $portofolio->delete();

        return redirect()->route('dashboard')->with('success', 'Karya berhasil dihapus!');
    }
}