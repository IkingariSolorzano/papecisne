@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ url('/articulo/'.$articulos->articulo_id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('articulo.form')
    </form>
</div>
@endsection
