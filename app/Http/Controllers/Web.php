<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web extends Controller {
    public function home() {
        return "<h1>Ini adalah Controllers Web</h1>";
    }

    public function profil($nama) {
        return "<h2>Laman Profil ".$nama."</h2>";
    }

    public function biodata() {
        $data['nama'] = 'Inez Eriana';
        $data['alamat'] = 'Nganjuk';
        return view('biodata',$data);
}
}