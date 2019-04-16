@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Email anda akan segera kami verifikasi. Mungkin membutuhkan beberapa hari untuk kami vefikasi') }}
                    {{ __('Jika anda belum menerima verifikasi email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
