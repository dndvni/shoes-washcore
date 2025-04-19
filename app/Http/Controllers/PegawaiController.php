<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = PegawaiModel::all();
        return view('pegawai', ['data' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawai_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        PegawaiModel::create([
            'nama_pegawai' => $request->nama_pegawai,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make('$request->password'),
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function ubah($id)
    {
        $pegawai = PegawaiModel::find($id);
        return view('pegawai_ubah', ['data' => $pegawai]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $pegawai = PegawaiModel::find($id);

        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->username = $request->username;
        $pegawai->email = $request->email;
        $pegawai->password = Hash::make('$request->password');
        $pegawai->no_hp = $request->no_hp;
        $pegawai->alamat = $request->alamat;

        $pegawai->save();

        return redirect('/pegawai');
    }
}
