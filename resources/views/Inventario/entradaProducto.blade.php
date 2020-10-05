@extends('layouts.inventario')


@push('css')
<link rel="stylesheet" href="{{ asset('css/Inventario/entradaProducto.css') }}">
@endpush


@section('panel')
<div class="container">
    <form class="mt-3 rounded border py-3 px-5 shadow-lg  bg-white">
        @csrf
        <div>
            <h2 class="h2_producto">ENTRADA DE INVENTARIO</h2>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Código: </label>
                <select name="code_product" id="select_product" class="form-control">
                    @isset($productos)
                        @foreach ($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->code}}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" value="{{ old('name') }}" readonly id="product_name" class="form-control @error('name') is-invalid @enderror"
                    name="name" maxlength="15" placeholder="Nombre del Producto">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label>Cantidad: </label>
                <input type="number" value="{{ old('total_amount') }}" id="product_total_amount"  name="total_amount" class="form-control" step="1"
                    placeholder="1" min="1">
                @error('total_amount')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Frecha de Registro: </label>
                <input type="date" name="created_at">
            </div>
            <div class="form-group col-md-3">
                <label>Frecha de Actualización: </label>
                <input type="date" name="update_at">
            </div>
            <div class="form-group col-md-3"></div>
        </div>

    </form>
</div>
@endsection


@push('js')
    <script>
        mostrar_submenu($('#sidebar-container ul .acciones-show'));
        menu_activo($('.acciones-btn'));
        submenu_activo($('#link_entrada_inventario'));

        
        $('#select_product').change(function (e) { 
            e.preventDefault();
           
            $.get({
                url: '/get_product/'+$('#select_product').val(),
                success: function(response){
                    $('#product_name').val(response.name);
                    $('#product_total_amount').val(response.stock.total_amount);
                },
                error: function (error) {
                    console.log(error)
                  }
            });

        });


    </script>
@endpush