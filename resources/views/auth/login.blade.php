@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
@endpush

@section('title')
    Inicio de Sesión 
@endsection

@section('content')
<div class="container">
    <div class="sub-container">
        <div class="banner-img">
            <picture>
                <img src="{{ asset('Images/Login/logo.png') }}" alt="" id="Img_logo">
            </picture>
        </div>
        <div class="login-form">
            <form action="{{ url('login') }}" method="post">
                @csrf
                <div class="title">
                    Phoenix
                </div>
                <div class="input-fields">
                    <input type="email" class="input" name="email" placeholder="Example@hotmail.com">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-fields">
                    <input type="password" class="input" name="password" placeholder="***************">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn">Ingresar</button>
            </form>
        </div>
    </div>
</div>
@endsection
