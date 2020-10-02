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
                <th data-field="type" data-formatter="typeFormatter" scope="col">Tipo</th>
                <th data-field="status" data-formatter="statusFormatter" scope="col">Estado</th>
                <th data-field="regular_price" scope="col">Precio Regular</th>
                <th data-field="sale_price" scope="col">Precio Venta</th>
                <th data-field="Acciones" data-formatter="accionesFormatter" data-events="accionesEvent" scope="col" data-width="111">Acciones</th>
                
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
    var $tabla_Productos = $('#tabla_productos');

    $tabla_Productos.bootstrapTable();

    function customSearch(data, text) {
        return data.filter(function (row) {
            return row.name.toString().toUpperCase().startsWith(text.toString().toUpperCase())
        })
    }

    function typeFormatter(value,row){
        return row.type.type;
    }

    function statusFormatter(value,row){
        return row.status.status;
    }
    
    function accionesFormatter(value,row){
        
        return '<a type="button" href="/producto/'+row.id+'/edit" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a> '+
                '<button class="btn btn-outline-danger delete"><i class="fas fa-trash-alt"></i></button> '
    }

    window.accionesEvent = {
        'click .delete': function(e, value,row){
            //TODO Personalizar el mensaje de confirmación de eliminación
            Swal.fire({
                icon: 'warning',
                title:'Confirmar Eliminación',
                text:'¿Está Seguro de Eliminar el Registro?',
                allowOutsideClick:false, //No permite que se cierre la ventana de confirmación cuando el usuario da click fuera del mensaje
                showCancelButton:true,  //Muestra el botón cancelar
                cancelButtonColor: '#ff4000', //Color del Botón cancelar
                cancelButtonText:'Cancelar' //Texto Botón cancelar
            }).then((data)=>{
                if (data.value) {
                    $.ajax({
                        type: "delete",
                        data:{
                            _token: "{{ csrf_token() }}" 
                        },
                        url: "/producto/"+row.id,
                        success: function (response) {
                            alert(response)
                        },
                        error: function (error) {
                            console.log(error)
                          }
                    });
                }
            });
        }
    }

// *************
    
</script>

@endpush