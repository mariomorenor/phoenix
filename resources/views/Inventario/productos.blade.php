@extends('layouts.inventario')

@push('css')
<link rel="stylesheet" href="{{ asset('css/inventario/lista_producto.css') }}">
@endpush

@section('panel')
<div class="container">
    <div >
        <table id="tabla_productos" class="table" data-search="true" data-custom-search="customSearch" data-pagination="true" data-url="{{ route('listar_productos') }}" data-height="550">
            <thead class="thead-dark">
                <tr class="tipo_letra_encabezado">
                    <th data-field="code" scope="col">#Cod</th>
                    <th data-field="name" scope="col">Nombre</th>
                    <th data-field="short_description" scope="col">Descripción</th>
                <th data-field="product_type_id" scope="col">Tipo</th>
                <th data-field="status_product_id" scope="col">Estado</th>
                <th data-field="regular_price" scope="col">Precio Regular</th>
                <th data-field="sale_price" scope="col">Precio Venta</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
</div>
@endsection

@push('js')
<script>
// SideBar
        mostrar_submenu($('#sidebar-container ul .acciones-show')); //Muestra El submenu ACCIONES
        menu_activo($('.acciones-btn')) //Sombrea el menu ACCIONES
        submenu_activo($('#link_listado_articulo')); //Se pone en negrita la opcion Listado Articulo
// **********

// Tabla
    $('#tabla_productos').bootstrapTable({});

    function customSearch(data, text) {
        return data.filter(function (row) {
            return row.name.toString().toUpperCase().startsWith(text.toString().toUpperCase())
        })
    }
// *************
</script>

@endpush