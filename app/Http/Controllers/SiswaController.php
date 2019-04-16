<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
    	$daftar_siswa = \App\Siswa::all();
    	return view('admin.siswa.index', ['daftar_siswa' => $daftar_siswa]);
    }

    public function tambah()
    {
    	return view('admin.siswa.tambah');
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'foto' => 'required|file'
    	]);
    	$upload = $request->file('foto');
    	$path = $upload->store('public');
    	$file = \App\Siswa::create([
    		'nama' => $request->nama,
    		'foto' => $path,
    		'kelas' => $request->kelas,
    		'jurusan' => $request->jurusan,
    		'ttl' => $request->ttl,
    		'alamat' => $request->alamat,
    		'motto' => $request->motto,
    	]);
    	return redirect(route('gurusiswa'))->with('tambah', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('admin.siswa.edit', ['siswa' => $siswa]);
    }


    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        
        return redirect(route('gurusiswa'))->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete();
        return redirect(route('gurusiswa'))->with('hapus', 'Data berhasil dihapus');
    }
}
