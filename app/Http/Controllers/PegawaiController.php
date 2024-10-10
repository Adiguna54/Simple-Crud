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
        // mengambil data pegawai untuk ditampilkan di view
        $pegawai = pegawai::get();
        // menampilkan data table pegawai di view inde.blade.php
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        // menampilkan view dari blade tambah
        return view('tambah');
    }

    // metode penambahan
    public function store(Request $request)
    {
        // menambahkan data baru pada table pegawai
        DB::table('pegawais')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // kembali ke halaman pegawai setelah melakukan penambahan data
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan ID nya
        $pegawai = DB::table('pegawais')->where('id', $id)->get();
        // menampilkan data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // metode pengeditan
    public function update(Request $request)
    {
        // mengubah data pada table pegawai berdasarkan id nya untuk di update datanya
        DB::table('pegawais')->where('id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // kembali ke halaman pegawai setelah melakukan perubahan data
        return redirect('/pegawai');
    }

    // metode penghapusan
    public function hapus($id)
    {
        // menghapus data pegawai pada table pegawai berdasarkan id yang dipilih
        DB::table('pegawais')->where('id', $id)->delete();
        return redirect('/pegawai');
    }
}
