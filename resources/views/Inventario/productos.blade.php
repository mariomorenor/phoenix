@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/inventario-style.css') }}">
@endpush

@section('content')

<x-sidebar_components/>
@endsection