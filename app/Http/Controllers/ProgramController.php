<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function tambah()
    {
    	return view('admin.program.tambah');
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'gambar' => 'required|file'
        ]);
        $upload =  $request->file('gambar');
        $path = $upload->store('public');
        $file = \App\Program::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path
        ]);

    	return redirect(route('program'));
    }

    public function detail($nama)
    {
    	$program = \App\Program::where('nama',$nama)->first();
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('detailprogram', ['program' => $program], ['pengumumans' => $pengumumans]);
    }

    public function program(Request $request)
    {
        if($request->has('cari')){
            $programs = \App\Program::where('nama', 'LIKE', '%'.$request->cari.'%')
                                        ->orwhere('deskripsi', 'LIKE', '%'.$request->cari.'%')
                                        ->orderBy('id', 'DESC')->paginate(5);
        } else {
            $programs = \App\Program::orderBy('id', 'DESC')->paginate(5);           
        }
        return view('admin.program.index', ['programs' => $programs]);
    }

    public function edit($id)
    {
        $program = \App\Program::find($id);
        return view('admin.program.edit', ['program' => $program]);
    }

    public function update(Request $request, $id)
    {
        $program = \App\Program::find($id);
        $program->update($request->all());
        
        return redirect(route('program'))->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $program = \App\Program::find($id);
        $program->delete();
        return redirect(route('program'))->with('hapus', 'Data berhasil dihapus');
    }
}
