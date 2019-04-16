<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;

class PostNewsController extends Controller
{


    public function tambah()
    {
    	return view('admin.postnews.tambah');
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'gambar' => 'required|file'
    	]);
    	$upload =  $request->file('gambar');
    	$path = $upload->store('public');
    	$file = \App\PostNews::create([
    		'judul' => $request->judul,
    		'post' => $request->post,
    		'gambar' => $path
    	]);

    	return redirect(route('kegiatan'));
    }

    public function detail($judul)
    {
        $news = \App\PostNews::where('judul',$judul)->first();
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
    	return view('detailnews', ['news' => $news], ['pengumumans' => $pengumumans]);
    }
    
    public function kegiatan(Request $request)
    {
        if($request->has('cari')){
            $posts = \App\PostNews::where('judul', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('post', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $posts = \App\PostNews::orderBy('id', 'DESC')->paginate(5);           
        }
        return view('admin.postnews.index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = \App\PostNews::find($id);
        return view('admin.postnews.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = \App\PostNews::find($id);
        $post->update($request->all());
        
        return redirect(route('kegiatan'))->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $siswa = \App\PostNews::find($id);
        $siswa->delete();
        return redirect(route('kegiatan'))->with('hapus', 'Data berhasil dihapus');
    }
}
