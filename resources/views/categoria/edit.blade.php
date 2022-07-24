@extends('layouts.app')
@section('content')
<div class="container">
   <form action="{{ url('/categoria/'.$categorias->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{method_field('PATCH')}}
      @include('categoria.form')
   </form>
</div>
@endsection
