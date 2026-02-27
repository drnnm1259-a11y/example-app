<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // =========================
    // TAMPILKAN DATA BUKU
    // =========================
    public function index()
    {
        $bukus = Buku::all(); // ambil semua data buku
        return view('buku.index', compact('bukus'));
    }

    // =========================
    // FORM TAMBAH
    // =========================
    public function create()
    {
        return view('buku.create');
    }

    // =========================
    // SIMPAN DATA
    // =========================
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        Buku::create($data);

        return redirect()->route('buku.index')
                         ->with('success','Data buku berhasil ditambahkan!');
    }

    // =========================
    // FORM EDIT
    // =========================
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // =========================
    // UPDATE DATA
    // =========================
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {

            if ($buku->gambar && file_exists(public_path('images/'.$buku->gambar))) {
                unlink(public_path('images/'.$buku->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $buku->update($data);

        return redirect()->route('buku.index')
                         ->with('success','Data buku berhasil diupdate!');
    }

    // =========================
    // HAPUS DATA
    // =========================
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->gambar && file_exists(public_path('images/'.$buku->gambar))) {
            unlink(public_path('images/'.$buku->gambar));
        }

        $buku->delete();

        return redirect()->route('buku.index')
                         ->with('success','Data buku berhasil dihapus!');
    }
}