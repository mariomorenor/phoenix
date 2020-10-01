@extends('layouts.inventario')

@section('panel')

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <label style="size: 25px">INGRESO DE PRODUCTOS</label>
        </div>
        <div class="col-4"></div>
    </div>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Código</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" maxlength="15" placeholder="COD001">
            @error('code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label >Nombre</label>
            <input type="text" class="form-control" name="name" maxlength="15" placeholder="Nombre">
          </div>
        </div>
        <!--
        <div class="form-group">
          <label for="inputAddress">Descripción Corta</label>
          <input type="text" class="form-control" name="description" placeholder="Descripción corta del producto ...">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Descripción Larga</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
    -->
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>



</div>
@endsection



@push('js')
<script>
// SideBar
        mostrar_submenu($('#sidebar-container ul .acciones-show')); //Muestra El submenu ACCIONES
        menu_activo($('.acciones-btn')) //Sombrea el menu ACCIONES
        submenu_activo($('#link_crear_articulo')); //Se pone en negrita la opcion Listado Articulo
// **********


</script>

@endpush