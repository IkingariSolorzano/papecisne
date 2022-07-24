@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Registrar nuevo artículo</h2>
    <form action="{{ url('/articulo') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('articulo.form')
    </form>
</div>
@endsection
