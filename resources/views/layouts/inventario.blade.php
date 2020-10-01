@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/inventario/inventario-style.css') }}">
@endpush


@prepend('js')
<script src="{{ asset('js/Inventario/Inventario.js') }}"></script>
@endprepend

@section('content')
<div class="d-flex">
    <div id="sidebar-container" class="bg-dark">
        <h4 class="titulo_menu">Inventario</h4>
        <ul>
            <li class="seleccion acciones-btn"><a href="#" id="acciones" class="text-light font-weight ">Acciones<span class="fas fa-caret-down flecha"></span></a></li>
            <ul class="acciones-show">
                <li><a id="link_modificar_articulo" href="#" class="d-block text-white p-1 sub_menu_inventario">Mantenimiento artículos</a></li>
                <li><a id="link_crear_articulo" href="{{ route('producto.create') }}" class="d-block text-white p-1 sub_menu_inventario">Crear artículo</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Seriar artículo</a></li>
                <li><a id="link_listado_articulo" href="{{ route('producto.index') }}" class="d-block text-white p-1 sub_menu_inventario">Listado artículos</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Entradas inventarios</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Salidas Inventario</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Transferencias almacenes </a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Producción</a></li>
            </ul>


            <li class="seleccion report-btn"><a href="#" class=" text-light font-weight">Reportes <span class="fas fa-caret-down flecha"></span></a></li>
            <ul class="report-show ">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Varios</a></li>
            </ul>


            <li class="seleccion archi-btn"><a href="#" class=" text-light font-weight">Archivos <span class="fas fa-caret-down flecha"></span></a></li>
            <ul class="archi-show ">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Entradas</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Salidas</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Transferencias</a></li>
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Producciones</a></li>
            </ul>


            <li class="seleccion config-btn "><a href="#" class="text-light font-weight">Configuración <span class="fas fa-caret-down flecha"></span></a></li>
            <ul class="config-show ">
                <li><a href="#" class="d-block text-white p-1 sub_menu_inventario">Configuración Módulo</a>
            </ul>
        </ul>
    </div>

</div>
<div style="margin-left: 15rem">
    @yield('panel')
</div>

@endsection



@push('js')
<script>
    $('.acciones-btn').click(function () {
        mostrar_submenu($('#sidebar-container ul .acciones-show'));
        menu_activo($('.acciones-btn'))
    });

    $('.report-btn').click(function () {
        mostrar_submenu($('#sidebar-container ul .report-show'));
        menu_activo($('.report-btn'))
    });

    $('.archi-btn').click(function () {
        mostrar_submenu($('#sidebar-container ul .archi-show'));
        menu_activo($('.archi-btn'))
    });

    $('.config-btn').click(function () {
        mostrar_submenu($('#sidebar-container ul .config-show'));
        menu_activo($('.config-btn'))
    });

</script>

@endpush


