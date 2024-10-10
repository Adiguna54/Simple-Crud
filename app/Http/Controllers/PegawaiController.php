<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawais')->get();
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('pegawais')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }
}
