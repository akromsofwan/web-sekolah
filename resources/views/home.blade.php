@extends('layouts.app')

@section('title')
	SMK MUHAMMADIYAH KESESI
@endsection

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('content')
    
<!-- CAROUSEL -->

	@include('layouts.carousel')

<!-- KIRI -->
	
	@include('layouts.floatkiri')
	

<!-- KANAN -->

	@include('layouts.floatkanan')

@endsection
