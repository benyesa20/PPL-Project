<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class Barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Method untuk menampilkan semua data barang
    public function index()
    {
        $data = Barang::all();
        // dd($data);
        return view('index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // Method untuk menampilkan form tambah barang
    public function create()
    {
        return view("create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // Method untuk menyimpan data barang
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:50', // Validasi untuk nama barang
            'kategori' => 'required|string', // Validasi untuk kategori
            'deskripsi' => 'required|string', // Validasi untuk deskripsi
            'harga' => 'required|numeric|min:0', // Validasi untuk harga
            'stok' => 'required|integer|min:0', // Validasi untuk stok
            'status' => 'required|in:tersedia,tidak tersedia', // Validasi untuk status
        ]);
        
        $barang = Barang::create($request->all()); // Menggunakan model Barang
        if ($barang) {
            return redirect()->route('barang.index')->with('success', 'Data barang berhasil ditambahkan'); // Mengarahkan ke rute index barang
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Method untuk menampilkan form edit barang
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id); // Cari barang berdasarkan ID
    return view("edit", compact('barang')); 
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // Method untuk memperbarui data barang
    public function update(Request $request, string $id)
    {
        // Validasi input
$request->validate([
    'nama_barang' => 'required|string|max:50', // Nama barang harus diisi, berupa string, dan maksimal 50 karakter.
    'kategori' => 'required|string', // Kategori barang harus diisi, berupa string.
    'deskripsi' => 'required|string', // Deskripsi barang harus diisi, berupa string.
    'harga' => 'required|numeric|min:0', // Harga barang harus diisi, berupa angka, dan minimal 0.
    'stok' => 'required|integer|min:0', // Stok barang harus diisi, berupa angka bulat, dan minimal 0.
    'status' => 'required|in:tersedia,tidak tersedia', // Status barang harus diisi, dan harus bernilai "tersedia" atau "tidak tersedia".
]);
        // Cari barang dan update
$barang = Barang::findOrFail($id); // Cari barang berdasarkan ID di model Barang
$barang->update([
    'nama_barang' => $request->nama_barang, // Update nama barang
    'kategori' => $request->kategori, // Update kategori barang
    'deskripsi' => $request->deskripsi, // Update deskripsi barang
    'harga' => $request->harga, // Update harga barang
    'stok' => $request->stok, // Update stok barang
    'status' => $request->status, // Update status barang (tersedia/tidak tersedia)
]);

// Redirect ke halaman index dengan pesan sukses
return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui!');

        
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    // Method untuk menghapus barang
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id); // Cari barang berdasarkan ID di model Barang
    $barang->delete(); // Hapus barang

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
        //
    }
}
