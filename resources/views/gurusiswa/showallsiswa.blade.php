@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	Semua Siswa
@endsection

@section('content')

<div class="kiri float-left col-md-9">
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<h4>X RPL</h4>
			<a class="btn btn-primary" href="">X RPL 1</a>
			<a class="btn btn-primary" href="">X RPL 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>X TKR</h4>
			<a class="btn btn-primary" href="">X TKR 1</a>
			<a class="btn btn-primary" href="">X TKR 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>X PBS</h4>
			<a class="btn btn-primary" href="">X PBS 1</a>
			<a class="btn btn-primary" href="">X PBS 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>X PHT</h4>
			<a class="btn btn-primary" href="">X PHT 1</a>
			<a class="btn btn-primary" href="">X PHT 2</a>
		</div>
	</div>

		<!-- =============== -->

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<h4>XI RPL</h4>
			<a class="btn btn-primary" href="">XI RPL 1</a>
			<a class="btn btn-primary" href="">XI RPL 2</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
			<h4>XI TKR</h4>
			<a class="btn btn-primary" href="">XI TKR 1</a>
			<a class="btn btn-primary" href="">XI TKR 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>XI PBS</h4>
			<a class="btn btn-primary" href="">XI PBS 1</a>
			<a class="btn btn-primary" href="">XI PBS 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>XI PHT</h4>
			<a class="btn btn-primary" href="">XI PHT 1</a>
			<a class="btn btn-primary" href="">XI PHT 2</a>
		</div>
	</div>

		<!-- =================== -->

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<h4>XII RPL</h4>
			<a class="btn btn-primary" href="">XII RPL 1</a>
			<a class="btn btn-primary" href="">XII RPL 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>XII TKR</h4>
			<a class="btn btn-primary" href="">XII TKR 1</a>
			<a class="btn btn-primary" href="">XII TKR 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>XII PBS</h4>
			<a class="btn btn-primary" href="">XII PBS 1</a>
			<a class="btn btn-primary" href="">XII PBS 2</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<h4>XII PHT</h4>
			<a class="btn btn-primary" href="">XII PHT 1</a>
			<a class="btn btn-primary" href="">XII PHT 2</a>
		</div>
	</div>	
</div>

<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection