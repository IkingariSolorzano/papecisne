@extends('layouts.app')
@section('content')
<div class="container">
   <h2>Registrar nueva categoría</h2>
   <form action="{{ url('/categoria') }}" method="post" enctype="multipart/form-data">
      @csrf
      @include('categoria.form')
   </form>
</div>
@endsection
