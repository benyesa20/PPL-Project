<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama_barang', 50); // Nama produk dengan panjang maksimal 50 karakter
            $table->string('kategori'); // Kategori produk (misalnya: pakaian, aksesori, dll.)
            $table->text('deskripsi'); // Deskripsi produk
            $table->decimal('harga', 10, 2); // Harga produk dengan 2 digit desimal
            $table->integer('stok'); // Stok produk
            $table->enum('status', ["tersedia", "tidak tersedia"]); // Status produk
            $table->timestamps(); // Kolom untuk mencatat waktu dibuat dan diperbarui
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
