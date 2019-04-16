<nav class="navbar shadow navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand nav" href="/">
                    <img src="{{('/img/nav.png')}}" width="30" height="30" class="" alt="">
                    <span>SMK MUSI</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Profil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('visimisi')}}">Visi & Misi</a>
                              <a class="dropdown-item" href="{{route('kepalasekolah')}}">Kepala Sekolah</a>
                              <a class="dropdown-item" href="{{route('sejarah')}}">Sejarah Sekolah</a>
                              <a class="dropdown-item" href="#">Sarana Prasarana</a>
                              <a class="dropdown-item" href="#">Humas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Jurusan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('rpl')}}">Rekayasa Perangkat Lunak (RPL)</a>
                              <a class="dropdown-item" href="{{route('tkr')}}">Teknik Kendaraan Ringan (TKR)</a>
                              <a class="dropdown-item" href="{{route('pbs')}}">Perbankan Syariah (PBS)</a>
                              <a class="dropdown-item" href="{{route('pht')}}">Perhotelan (PTH)</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="">Kurikulum <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="">Fasilitas <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="{{route('gurukaryawan')}}">Guru & Karyawan <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="">About <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        