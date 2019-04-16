<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('cari')){
            $pengumumans = \App\Pengumuman::where('judul', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('deskripsi', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(5);           
        }
        return view('admin.pengumuman.index', ['pengumumans' => $pengumumans]);
    }
    
    public function tambah()
    {
    	return view('admin.pengumuman.tambah');
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'gambar' => 'required|file'
    	]);
    	$upload = $request->file('gambar');
    	$path = $upload->store('public');
    	$file = \App\Pengumuman::create([
    		'judul' => $request->judul,
    		'deskripsi' => $request->deskripsi,
    		'gambar' => $path
    	]);

    	return redirect(route('pengumuman'));

    }

    public function detail($judul)
    {          
        $pengumuman = \App\Pengumuman::where('judul',$judul)->first();
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('detailpengumuman', ['pengumuman' => $pengumuman], ['pengumumans' => $pengumumans]);
    }
    
    public function edit($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        return view('admin.pengumuman.edit', ['pengumuman' => $pengumuman]);
    }


    public function update(Request $request, $id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->update($request->all());
        
        return redirect(route('pengumuman'))->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->delete();
        return redirect(route('pengumuman'))->with('hapus', 'Data berhasil dihapus');
    }
}
