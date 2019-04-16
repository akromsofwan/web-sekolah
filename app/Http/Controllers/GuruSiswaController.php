<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruSiswaController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
            $daftar_guru = \App\Guru::where('nama', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('alamat', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('pengampu', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('ttl', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $daftar_guru = \App\Guru::orderBy('id', 'DESC')->paginate(5);           
        }

        // if($request->has('cari')){
        //     $daftar_siswa = \App\Siswa::where('nama', 'LIKE', '%'.$request->cari.'%')
        //                                 ->orwhere('alamat', 'LIKE', '%'.$request->cari.'%')
        //                                 ->orwhere('kelas', 'LIKE', '%'.$request->cari.'%')
        //                                 ->orwhere('jurusan', 'LIKE', '%'.$request->cari.'%')
        //                                 ->orderBy('id', 'DESC')->paginate(5);
        // } else {
        //     $daftar_siswa = \App\Siswa::orderBy('id', 'DESC')->paginate(5);           
        // }
        
    	return view('admin.gurusiswa.index', ['daftar_guru' => $daftar_guru]);
    }

    public function gurukaryawan()
    {
    	$daftar_guru = \App\Guru::orderBy('nama', 'ASC')->paginate(15);
    	// $daftar_siswa = \App\Siswa::orderBy('nama', 'ASC')->paginate(15);
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
    	return view('gurusiswa.index', compact('daftar_guru', 'pengumumans'));
    }

    public function detail($nama)
    {
        $gurukaryawan = \App\Guru::where('nama',$nama)->first();
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('detailgurukaryawan', ['gurukaryawan' => $gurukaryawan], ['pengumumans' => $pengumumans]);
    }

    // public function showallguru()
    // {
    //     $daftar_guru = \App\Guru::all();
    //     $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
    //     return view('gurusiswa.showallguru', ['daftar_guru' => $daftar_guru], ['pengumumans' => $pengumumans]);
    // }

    // public function showallsiswa()
    // {
    //     $daftar_siswa = \App\Siswa::all();
    //     $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
    //     return view('gurusiswa.showallsiswa', ['daftar_siswa' => $daftar_siswa], ['pengumumans' => $pengumumans]);
    // }
}
