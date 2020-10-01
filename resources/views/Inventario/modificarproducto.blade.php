@extends('layouts.inventario')
@push('css')
<link rel="stylesheet" href="{{ asset('css/Inventario/ingresoProducto.css') }}">
@endpush
@section('panel')

<div class="container">
  <br>
    <form action="#" method="POST">
        @csrf
        <div>
          <h2 class="h2_producto">MODIFICACIÓN DE PRODUCTOS</h2>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Código</label>
            <input type="text" value="{{$producto->code}}" class="form-control @error('code') is-invalid @enderror" name="code" maxlength="15" placeholder="COD001">
            @error('code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label >Nombre</label>
          <input type="text" value="{{$producto->name}}" class="form-control @error('name') is-invalid @enderror" name="name" maxlength="15" placeholder="Nombre del Producto">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label>Tipo de Producto: </label>
            <select name="product_type" class="form-control">
                @isset($types)
                @foreach ($types as $type)
                  <option value='{{$type->id}}' @if($type->id == $producto->product_type_id) selected @endif >{{$type->type}}</option>
                @endforeach
                @endisset
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Estado: </label>
            <select name="status_product" class="form-control">
              @isset($statues)
              @foreach ($statues as $status)
              <option value='{{$status->id}}'  @if($status->id == $producto->status_product_id) selected @endif  >{{$status->status}}</option>
          @endforeach
              @endisset
              
          </select>
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Precio normal: </label>
            <input type="number" value="{{$producto->regular_price}}" name="regular_price" class="form-control" step="0.01" placeholder="10.00" min="0.01" max="99999.99">
          </div>
          <div class="form-group col-md-3">
            <label for="inputZip">Precio venta: </label>
            <input type="number" name="sale_price" value="{{$producto->sale_price}}" class="form-control" step="0.01" placeholder="10.00" min="0.01" max="99999.99">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Descripción Corta</label>
          <input type="text" value="{{$producto->short_description}}" class="form-control @error('short_description') is-invalid @enderror" name="short_description" maxlength="50" placeholder="Descripción corta del producto...">
          @error('short_description')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAddress2">Descripción Larga</label>
        <textarea name="description" cols="30"  rows="8" style="resize: none" class="form-control @error('description') is-invalid @enderror" maxlength="250" placeholder="Descripción larga del producto...">{{$producto->description}}</textarea>
          @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="submit" class="btn btn-dark">Cancelar</button>
      </form>
</div>
@endsection



@push('js')
<script>
// SideBar
        mostrar_submenu($('#sidebar-container ul .acciones-show')); //Muestra El submenu ACCIONES
        menu_activo($('.acciones-btn')) //Sombrea el menu ACCIONES
        submenu_activo($('#link_modificar_articulo')); //Se pone en negrita la opcion Listado Articulo
// **********


</script>

@endpush