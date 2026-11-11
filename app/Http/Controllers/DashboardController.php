<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('home');
    }

    public function product() {
        return view('product');
    }

    public function about() {
        return view('about');
    }

    public function detail($nama) {
        // Data harga produk sesuai modul
        $hargaList = [
            'sepatu' => '300.000',
            'baju'   => '200.000',
            'celana' => '150.000'
        ];

        // Ubah input menjadi huruf kecil untuk mencocokkan key
        $namaItem = strtolower($nama);
        $harga = $hargaList[$namaItem] ?? 'Harga tidak ditemukan';

        return view('detail', compact('namaItem', 'harga'));
    }
}