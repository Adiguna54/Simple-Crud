<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\pegawai;
use App\Models\Pegawai as ModelsPegawai;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PegawaiController extends Controller
{

    public function index()
    {
        // mengambil data pegawai untuk ditampilkan di view
        $pegawai = Pegawai::get();
        // menampilkan data table pegawai di view inde.blade.php
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        // menampilkan view dari blade tambah
        return view('tambah');
    }

    // metode penambahan
    public function store(PegawaiRequest $request)
    {
        // menambahkan data baru pada table pegawai
        // dd($request);
        try {
            // throw new Exception("Error Processing Request", 1);
            DB::beginTransaction();
            $pegawai = new Pegawai();
            $pegawai->pegawai_nama = $request->pname;
            $pegawai->pegawai_jabatan = $request->pjabatan;
            $pegawai->pegawai_umur = $request->pumur;
            $pegawai->pegawai_alamat = $request->palamat;
            $pegawai->save();
            DB::commit();
            return redirect('/pegawai')->with('success', 'Success Add New Data');
        } catch (Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return redirect('/pegawai')->with('failed', 'Failed to Add New Data');
        }
        // DB::table('pegawais')->insert([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => $request->alamat
        // ]);

        // kembali ke halaman pegawai setelah melakukan penambahan data
        // return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan ID nya untuk ditampilkan di halaman edit
        $pegawai = Pegawai::where('id', $id)->get();
        // $pegawai = DB::table('pegawais')->where('id', $id)->get();
        
        // menampilkan data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // metode pengeditan
    public function update(PegawaiRequest $request)
    {
        // mengubah data pada table pegawai berdasarkan id nya untuk di update datanya
        try {
        
            DB::beginTransaction();
            $pegawai = Pegawai::findOrFail($request->id);
            $pegawai->pegawai_nama = $request->pname;
            $pegawai->pegawai_jabatan = $request->pjabatan;
            $pegawai->pegawai_umur = $request->pumur;
            $pegawai->pegawai_alamat = $request->palamat;
            $pegawai->save();
            DB::commit();
            return redirect('/pegawai')->with('success', 'Success to Edit the Data');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/pegawai')->with('failed', 'Failed to Edit the Data');
        }


        // DB::table('pegawais')->where('id', $request->id)->update([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => $request->alamat
        // ]);

        // kembali ke halaman pegawai setelah melakukan perubahan data
        // return redirect('/pegawai');
    }

    // metode penghapusan
    public function hapus($id)
    {
        // menghapus data pegawai pada table pegawai berdasarkan id yang dipilih
        $pegawai = Pegawai::where('id', $id)->delete();
        return redirect('/pegawai');
    }
}
