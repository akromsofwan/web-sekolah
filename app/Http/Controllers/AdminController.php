<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // SISWA

    public function calonsiswa(Request $request)
    {
        if($request->has('cari')){
            $daftar_siswa = \App\Register::where('nama_lengkap', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('nama_ibu', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('jurusan', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('alamat', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $daftar_siswa = \App\Register::orderBy('id', 'DESC')->paginate(5);           
        }
        return view('admin.siswa.index', ['daftar_siswa' => $daftar_siswa]);
    }

    public function index(Request $request)
    {
        if($request->has('cari')){
            $daftar_siswa = \App\Register::where('nama_lengkap', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('nama_ibu', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('jurusan', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('alamat', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $daftar_siswa = \App\Register::orderBy('id', 'DESC')->paginate(5);           
        }
        return view('admin.index', ['daftar_siswa' => $daftar_siswa]);
    }

    public function tambah()
    {
        return view('admin.tambah');
    }

    public function create(Request $request)
    {
        \App\Register::create($request->all());
        return redirect('akrom')->with('tambah', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = \App\Register::find($id);
        return view('admin.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Register::find($id);
        $siswa->update($request->all());
        return redirect('akrom')->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $siswa = \App\Register::find($id);
        $siswa->delete();
        return redirect('akrom')->with('hapus', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $siswa = \App\Register::find($id);
        return view('admin.detail', ['siswa' => $siswa]);
    }



}
