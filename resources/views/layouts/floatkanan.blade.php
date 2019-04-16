<div class="kanan col-md-4 col-sm-6 float-right mt-3">
	<div class="pengumuman">
		<h2><i class="fas fa-th-large"></i> Pengumuman</h2>
		@foreach($pengumumans as $pengumuman)
			<div class="col-sm-10 offset-md-1">
				<figure class="figure text-center">
				  <img src="{{Storage::url($pengumuman->gambar)}}" class="figure-img img-fluid rounded text-center" alt="...">	  
				</figure>
				<a class="font-weight-bold text-center" href="/detailpengumuman/{{$pengumuman->judul}}">{{$pengumuman->judul}}</a>
				<figcaption class="figure-caption">{{ $pengumuman->updated_at }}</figcaption>
				<hr>
			</div>
		@endforeach
		{{$pengumumans->links()}}
	</div>

	<div class="kalender mt-3">
		<h2><i class="fas fa-th-large"></i> Kalender Hijriyah</h2>
		<div class="text-center">
			@include('layouts.hijriyah')
		</div>
	</div>
	
	<div class="jadwalsholat text-center mt-3">
		<h2 class="text-left"><i class="fas fa-th-large"></i> Jadwal Sholat</h2>
		<iframe src="//www.arrahmah.com/jadwal-shalat/?bg=097900" scrolling="no" width="100%" height="200" frameborder="no" framespacing="0"></iframe>
	</div>

	<div class="kalender mt-3">
		<h2><i class="fas fa-th-large"></i> Kalender</h2>
		@include('layouts.kalender')
	</div>


	




</div>

