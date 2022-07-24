@extends('layouts.app')
@section('content')
<div class="container">
   <a href="{{ url('/categoria/create')}}"><button type="button" class="btn btn-primary btn-lg">Crear nueva
         Categoría</button></a>
</div>
<div class="container">
   <table class="table">
      <thead>
         <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Descripcion</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody>
         @foreach($categorias as $categoria)
         <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre_categoria}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>
               <a href="{{ url('/categoria/'.$categoria->id.'/edit') }}" |>Editar</a>

               <form action="{{url('/categoria/'.$categoria->id) }}" method="POST">
                  @csrf
                  {{ method_field("DELETE") }}
                  <input type="submit" value="Borrar"
                     onclick="return confirm('¿Confirma que desea eliminar esta categroría?')" />
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@endsection
