@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Este es el index de papelería</h2>
    <div class="container">
        <a href="{{ url('/articulo/create')}}"><button type="button" class="btn btn-primary btn-lg">Crear nuevo
                Artículo</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Clave</th>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Presentación</th>
                <th>Contenido</th>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Precio Compra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td scope="row">{{ $articulo ->id }}</td>
                <td>{{ $articulo-> codigo_barras }}</td>
                <td>{{$articulo->clave_articulo}}</td>
                <td><b>{{$articulo->nombre_articulo }}</b></td>
                <td><b>$ {{$articulo->precio_publico}}</b></td>
                <td>{{$articulo->presentacion}}</td>
                <td>{{$articulo->contenido}}</td>
                <td>{{$articulo->categoria_id}}</td>
                <td>{{$articulo->marca_id}}</td>
                <td>{{$articulo->precio_compra}}</td>
                <td>
                    <a href="{{ url('/articulo/'.$articulo->id.'/edit') }}" |>Editar</a>

                    <form action="{{url('/articulo/'.$articulo->id) }}" method="POST">
                        @csrf
                        {{ method_field("DELETE") }}
                        <input type="submit" value="Borrar"
                            onclick="return confirm('¿Confirma que desea eliminar este artículo?')" />
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="container">
        <a href="{{ url('/articulo/create')}}"><button type="button" class="btn btn-primary btn-lg">Crear nuevo
                Artículo</button></a>
    </div>
</div>
@endsection
