@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 d-flex justify-content-center">
            <img src="{{ asset('Images/Login/logo.png') }}" alt="" id="Img_logo">
        </div>
        <div class="col-4 mt-5 mx-auto">
            <input type="email" class="txtlogin" placeholder="Email">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="password" class="txtlogin" placeholder="Password">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="button" class="btn btn-light">Ingresar</button>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection
