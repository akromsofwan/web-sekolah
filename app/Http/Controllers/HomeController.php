<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = \App\PostNews::orderBy('id', 'DESC')->paginate(4);
        $programs = \App\Program::orderBy('id', 'DESC')->paginate(3);
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('home', compact('posts', 'programs', 'pengumumans'));
    }

    public function tambah()
    {
        return view('user.tambah');
    }
    public function create(Request $request)
    {
        \App\Register::create($request->all());
        return redirect('home');
    }


    public function gurusiswa()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('gurusiswa', ['pengumumans' => $pengumumans]);
    }

    // jurusan
    public function rpl()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('jurusan.rpl', ['pengumumans' => $pengumumans]);
    }
    public function tkr()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('jurusan.tkr', ['pengumumans' => $pengumumans]);
    }
    public function pbs()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('jurusan.pbs', ['pengumumans' => $pengumumans]);
    }
    public function pht()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('jurusan.pht', ['pengumumans' => $pengumumans]);
    }

    // VisiMisi
    public function visimisi()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('profil.visimisi', ['pengumumans' => $pengumumans]);
    }
    public function kepalasekolah()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('profil.kepalasekolah', ['pengumumans' => $pengumumans]);
    }
    public function sejarah()
    {
        $pengumumans = \App\Pengumuman::orderBy('id', 'DESC')->paginate(6);
        return view('profil.sejarah', ['pengumumans' => $pengumumans]);
    }

}
