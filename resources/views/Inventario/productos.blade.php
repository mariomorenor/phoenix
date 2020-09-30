@extends('layouts.app')

@push('js1')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/inventario-style.css') }}">
@endpush

@section('content')
<div class="d-flex">
    <div id="sidebar-container" class="bg-dark">
        <h4 class="titulo_menu">Inventario</h4>
        <ul>
            <li class="seleccion"><a href="#" class="acciones-btn text-light font-weight">Acciones<span class="fas fa-caret-down first"></span></a></li>
            <ul class="acciones-show">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Mantenimiento artículos</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Crear artículo</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Seriar artículo</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Listado artículos</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Entradas inventarios</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Salidas Inventario</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Transferencias almacenes </a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Producción</a></li>
            </ul>


            <li class="seleccion"><a href="#" class="report-btn text-light font-weight">Reportes <span class="fas fa-caret-down second"></span></a></li>
            <ul class="report-show">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Varios</a></li>
            </ul>


            <li class="seleccion"><a href="#" class="archi-btn text-light font-weight">Archivos <span class="fas fa-caret-down third"></span></a></li>
            <ul class="archi-show">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Entradas</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Salidas</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Transferencias</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Producciones</a></li>
            </ul>


            <li class="seleccion"><a href="#" class="config-btn text-light font-weight">Configuración <span class="fas fa-caret-down fourth"></span></a></li>
            <ul class="config-show">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Configuración Módulo</a>
            </ul>
        </ul>
    </div>
</div>
@endsection

@push('js2')
<script>
    $('.acciones-btn').click(function(){
        $('#sidebar-container ul .acciones-show').toggleClass('show');
        $('#sidebar-container ul .first').toggleClass('rotate');
    });
    $('.report-btn').click(function(){
        $('#sidebar-container ul .report-show').toggleClass('show2');
        $('#sidebar-container ul .second').toggleClass('rotate');
    });
    $('.archi-btn').click(function(){
        $('#sidebar-container ul .archi-show').toggleClass('show3');
        $('#sidebar-container ul .third').toggleClass('rotate');
    });
    $('.config-btn').click(function(){
        $('#sidebar-container ul .config-show').toggleClass('show4');
        $('#sidebar-container ul .fourth').toggleClass('rotate');
    });
</script>

@endpush


