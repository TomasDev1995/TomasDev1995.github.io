@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <h3>Nueva proveedor</h3>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div/>
    <div/>
{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
{!!Form::token()!!}

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre..">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Direccion..">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="documento">DNI</label>
                <select name="tipo_documento" class="form-control" id="">
                    <option value="DNI">DNI</option>
                    <option value="RUC">RUC</option>
                    <option value="PAS">PAS</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="num_documento">Numero documento.</label>
                <input type="text" name="num_documento" required value="{{old('num_documento')}}" class="form-control" placeholder="Numero de documento..">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Telefono..">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email..">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Eliminar</button>
            </div>
        </div>
    </div>

{!!Form::close()!!}
@endsection
