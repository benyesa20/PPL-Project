<?php 

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat kategori
        $kategori1 = Kategori::create([
            "nama" => "Pakaian", // Mengisi kolom nama kategori
        ]);

        // Membuat barang dengan relasi ke kategori
        $barang1 = Barang::create([  // Simpan hasil create ke variabel $barang1
            "nama_barang" => "Hoodie Unib",
            "deskripsi" => "Hoodie nyaman dan lembut dengan logo Unib",
            "harga" => 200000,
            "stok" => 50,
            "status" => "Tersedia",
            "kategori_id" => $kategori1->id // Menghubungkan dengan kategori_id
        ]);

        $kategori2 = Kategori::create([
            "nama" => "Aksesoris", // Mengisi kolom nama kategori
        ]);

        // Membuat barang dengan relasi ke kategori
        $barang2 = Barang::create([  // Simpan hasil create ke variabel $barang1
            "nama_barang" => "Totebag",
            "deskripsi" => "Totebag ramah lingkungan",
            "harga" => 50000,
            "stok" => 70,
            "status" => "Tersedia",
            "kategori_id" => $kategori2->id // Menghubungkan dengan kategori_id
        ]);

    
        // Membuat gambar dengan relasi ke barang
        $gambar1 = Gambar ::create([
            'nama' => 'logo unib',
            'barang_id' => $barang1->id // Menghubungkan dengan barang_id
        ]);

        $gambar2 = Gambar ::create([
            'nama' => 'logo UNIB',
            'barang_id' => $barang1->id // Menghubungkan dengan barang_id
        ]);

        $gambar3 = Gambar ::create([
            'nama' => 'logo UNIBB',
            'barang_id' => $barang1->id // Menghubungkan dengan barang_id
        ]);

        $gambar4 = Gambar ::create([
            'nama' => 'Batik Rafflesia',
            'barang_id' => $barang2->id // Menghubungkan dengan barang_id
        ]);

        $gambar5 = Gambar ::create([
            'nama' => 'Batik Nusantara',
            'barang_id' => $barang2->id // Menghubungkan dengan barang_id
        ]);

        $gambar6 = Gambar ::create([
            'nama' => 'Batik Bengkulu',
            'barang_id' => $barang2->id // Menghubungkan dengan barang_id
        ]);
    }
}
