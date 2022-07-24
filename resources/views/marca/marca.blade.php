@extends('layouts.app')
@section('content')
<div class="container">
   <a href="{{ url('/marca/create')}}"><button type="button" class="btn btn-primary btn-lg">Crear nueva
         Marca</button></a>
</div>
<div class="container">
   <table class="table">
      <thead>
         <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody>
         @foreach($marcas as $marca)
         <tr>
            <td>{{$marca->id}}</td>
            <td>{{$marca->nombre_marca}}</td>
            <td>{{$marca->descripcion}}</td>
            <td>
               <a href="{{ url('/marca/'.$marca->id.'/edit') }}" |>Editar</a>

               <form action="{{url('/marca/'.$marca->id) }}" method="POST">
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
