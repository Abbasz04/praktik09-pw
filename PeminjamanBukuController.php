<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function index(){
        return view('peminjaman_buku');
    }

    public function hasil(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required|date',
            'tema' => 'required',
            'no' => 'required',
        ]);

        return view('hasil_pinjam', [
            'data' => $request
        ]);
    }
}
