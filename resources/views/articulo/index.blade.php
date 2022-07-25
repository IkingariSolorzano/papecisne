@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <a href="{{ url('/articulo/create')}}"><button type="button" class="btn btn-primary btn-lg">Crear nuevo
                Artículo</button></a>
    </div>
    <table class="table table-sm">
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
                <td class="fs-6 fw-ligh" scope="row">{{ $articulo ->articulo_id }}</td>
                <td class="fs-6 fw-ligh">{{ $articulo-> codigo_barras }}</td>
                <td class="fs-6 fw-ligh">{{$articulo->clave_articulo}}</td>
                <td class="fs-6 fw-ligh"><b class="text-success">{{$articulo->nombre_articulo }}</b></td>
                <td class="fs-6 fw-ligh"><b class="text-danger">$ {{$articulo->precio_publico}}</b></td>
                <td class="fs-6 fw-ligh">{{$articulo->presentacion}}</td>
                <td class="fs-6 fw-ligh">{{$articulo->contenido}}</td>
                <td class="fs-6 fw-ligh">{{$articulo->nombre_categoria}}</td>
                <td class="fs-6 fw-ligh">{{$articulo->nombre_marca}}</td>
                <td class="fs-6 fw-ligh">{{$articulo->precio_compra}}</td>
                <td class="fs-6 fw-ligh">
                    <a href="{{ url('/articulo/'.$articulo->articulo_id.'/edit') }}" |>Editar</a>

                    <form action="{{url('/articulo/'.$articulo->articulo_id) }}" method="POST">
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
