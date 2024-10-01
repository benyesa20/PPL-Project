<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class Barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function create()
    {
        return view("create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
