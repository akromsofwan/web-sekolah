<div class="kiri col-md-8 float-left">
	<!-- KEPALA SEKOLAH -->

	<div class="pendahuluan">
		<div class="row">
			<div class="col-md-2 col-sm-12 text-center mt-3">
				<figure class="figure">
				  <img src="{{('img/principal.jpg')}}" class="figure-img img-fluid rounded text-center" alt="...">
				  <figcaption class="figure-caption text-center">Principal</figcaption>
				</figure>
			</div>
			<div class="col-md-10 mt-3 text-justify">
				<p>Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, termasuk dalam penyediaan tenaga kerja trampil pada dunia kerja. Dalam hal ini dunia pendidikan, khususnya SMK MUHAMMADIYAH KESESI mempunyai tanggung jawab yang besar dalam menyiapkan sumber daya manusia yang tangguh sehingga mampu hidup selaras didalam perubahan teknologi. Dalam masa kepemimpinan Bp. Moh. Abdul Kodir, S.Pd.I, SMK MUHAMMADIYAH KESESI bertekad memberikan pelayanan pendidikan yang terbaik bagi siswa-siswanya. Semua perkembangan teknologi dicoba untuk diikuti dan diberikan kepada siswa sehingga lulusannya diharapkan mampu beradaptasi dengan dunia kerja sesuai dengan jurusannya.</p>
			</div>
		</div>
	</div>


	<!-- SEJARAH SEKOLAH -->

	<div class="sejarah">
		<div class="row">
			<div class="col-md-8 mt-3 text-justify">
				<p>Alhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Metamorfosa dunia pendidikan tak lagi bisa dihindari sejalan dengan peradaban IPTEK, termasuk SMK MUHAMMADIYAH KESESI sebagai institusi pendidikan berusaha membangun efektivitas komunikasi dan informasi dalam era globalisasi. Sistem digital telah berkembang secara cepat dan merambah pesat dalam dunia pendidikan. Oleh karena itu, revolusi teknologi informasi ini kita optimalkan agar pendidikan masa mendatang lebih bersifat terbuka dan kolaboratif. Berbagai informasi berkaitan dengan program dan pengembangan sekolah dapat diakses melalui website SMK MUHAMMADIYAH KESESI sehingga media ini dapat digunakan sebagai sarana interaksi antara sekolah dengan siswa, orang tua siswa, alumni dan stakeholder lainnya secara luas. Kami sadari bahwa website SMK MUHAMMADIYAH KESESI masih banyak kekurangan baik dari sisi tampilan, menu maupun isi. Namun demikian, kami akan terus berkreasi dan meng-update agar informasi penyelenggaraan pendidikan dapat tersosialisasi dengan baik.</p>
			</div>

			<div class="col-md-4 col-sm-12 text-center mt-3">
				<figure class="figure">
				  <img src="{{('img/nav.png')}}" class="figure-img img-fluid rounded text-center" alt="..." width="200" height="200">
				  <figcaption class="figure-caption text-center">SMK MUHAMMADIYAH KESESI</figcaption>
				</figure>
			</div>
		</div>
	</div>



	<!-- NEWS -->

	<div class="news">
		<h2><i class="fas fa-th-large"></i> Berita Terbaru</h2>
		@foreach($posts as $post)
		<div class="row">
			<div class="col-md-4 col-sm-12 text-center">
				<figure class="figure">
				  <img src="{{Storage::url($post->gambar)}}" class="figure-img img-fluid rounded text-center" alt="...">
				  
				</figure>
			</div>
			<div class="col-md-8">
				<div class="text-justify">
					<a href="detailnews/{{$post->judul}}"><h6>{{$post->judul}}</h6></a>
					<p class="deskripsi">{{$post->post}}</p>
					<figcaption class="figure-caption">{{$post->created_at}}</figcaption>
					<a href="detailnews/{{$post->judul}}">Read more...</a>
				</div>
			</div>
		</div>
		<hr>
		@endforeach
		{{$posts->links()}}
	</div>

	<!-- info PPDB -->
	<div class="ppdb">
		<h2><i class="fas fa-th-large"></i> Info PPDB</h2>
		<p>Untuk anda yang ingin mendaftarkan di SMK MUHAMMADIYAH KESESI, anda harus memenuhi persyaratan sebagai berikut:</p>
		<ol>
			<li>Fc. Kartu Keluarga</li>
			<li>Fc. KTP orang tua/wali murid</li>
			<li>Fc. KTP akta kelahiran</li>
			<li>Fc. NISN (menyusul)</li>
			<li>Fc. raport semerter I-V</li>
			<li>Pas Foto berwarna ukuran 3x4 (5 lembar)</li>
			<li>Surat keterangan sehat dari dokter</li>
			<li>Fc. piagam perhargaan (bila ada)</li>
		</ol>
		<p>Untuk PPDB online, anda bisa klik link <a href="{{route('usertambah')}}">disini</a></p>
	</div>


	<!-- PROGRAM UNGGULAN -->

	<div class="programunggulan">
		<h2><i class="fas fa-th-large"></i> Program Unggulan</h2>
		@foreach($programs as $program)
		<div class="row">
			<div class="col-md-4 col-sm-12 text-center">
				<figure class="figure">
				  <img src="{{Storage::url($program->gambar)}}" class="figure-img img-fluid rounded text-center" alt="...">
				</figure>
			</div>
			<div class="col-md-8">
				<div class="text-justify">
					<a href="detailprogram/{{$program->nama}}"><h6>{{$program->nama}}</h6></a>
					<p class="deskripsi">{{$program->deskripsi}}</p>
					<a href="detailprogram/{{$program->nama}}">Read more...</a>
				</div>
			</div>
		</div>
		<hr>
		@endforeach
		{{$programs->links()}}
	</div>


	<!-- PROFIL -->
	<div class="profil">
		<h2><i class="fas fa-th-large"></i> Profil Kami</h2>

		<!-- YOUTUBE -->

		<div class="video">
			<div class="col-md-12 text-center">
				<iframe class="img-fluid" src="https://www.youtube.com/embed/etu2c687drM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<!-- MAPS -->

		<div class="maps">
			<div class="col-md-12 text-center">
			<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9013745334455!2d109.51404121408055!3d-7.020878294928606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fe086ecc6265d%3A0x777de9d6f64308b2!2sSmk+Muhammadiyah+Kesesi!5e0!3m2!1sid!2sid!4v1553245093996" max-width="765" max-width="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		
	</div>


</div>