@extends('layouts.app')

@section('content')
<div class="container">
    <div class="sub-container">
        <div class="banner-img">
            <picture>
                <img src="{{ asset('Images/Login/logo.png') }}" alt="" id="Img_logo">
            </picture>
        </div>
        <div class="login-form">
            <form action="#" method="post"></form>
            <div class="title">
                Phoenix
            </div>
            <div class="input-fields">
                <input type="email" class="input" name="Email" placeholder="Examplo@hotmail.com">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-fields">
                <input type="password" class="input" name="Password" placeholder="***************">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                <button type="submit" class="btn">Ingresar</button>
        </div>
    </div>
</div>
@endsection
