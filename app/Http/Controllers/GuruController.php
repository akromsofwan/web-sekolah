<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {	
    	$daftar_siswa = \App\Guru::all();
    	return view('admin.guru.index', ['daftar_siswa' => $daftar_siswa]);
    }

    public function tambah()
    {
    	return view('admin.guru.tambah');
    }
    public function create(Request $request)
    {
    	$this->validate($request, [
    		'foto' => 'required|file'
    	]);
    	$upload = $request->file('foto');
    	$path = $upload->store('public');
    	$file = \App\Guru::create([
    		'nama' => $request->nama,
    		'foto' => $path,
    		'pengampu' => $request->pengampu,
    		'ttl' => $request->ttl,
    		'alamat' => $request->alamat,
    		'no_hp' => $request->no_hp,
    		'motto' => $request->motto
    	]);
    	return redirect(route('gurusiswa'))->with('tambah', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = \App\Guru::find($id);
        return view('admin.guru.edit', ['guru' => $guru]);
    }


    public function update(Request $request, $id)
    {
        $guru = \App\Guru::find($id);
        $guru->update($request->all());
        
        return redirect(route('gurusiswa'))->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();
        return redirect(route('gurusiswa'))->with('hapus', 'Data berhasil dihapus');
    }

}
