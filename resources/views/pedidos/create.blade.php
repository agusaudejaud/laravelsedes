@extends('layouts.app')
@section('title', 'Crear Pedido')
@section('content')


<div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
    <form action="{{ action('PedidoController@store') }}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="container-fluid">
            <div class="form-group col-lg-4 col-md-4 col-sm-12">
				<label >Numero de orden</label>
				<input type="number" autocomplete="off" class="form-control input-sm uppercase" name="numeroorden"  placeholder="Numero de orden" tabindex="1">
            </div>
            
           
            <div class="form-group col-lg-4 col-md-4 col-sm-12">
				<label >Nombre proveedor</label>
				<div class="input-group">
					<select class="form-control input-sm" name="proveedor" id="proveedor"  tabindex="2">
                        <option value="">SELECCIONAR</option>
                        @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                        @endforeach
					</select>
                    </div>

        </div>
        <div class="col-lg-4 col-md-4">
                <label >Fecha del registro</label>
                <input type="date" class="form-control input-sm"  name="fecha" id="fecha" tabindex="3">
            </div>
        </div>
        
        <br>
        
        </div>
    </form>   
</div>


@endsection