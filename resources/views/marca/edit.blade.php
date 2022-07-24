@extends('layouts.app')
@section('content')
<div class="container">
   <form action="{{ url('/marca/'.$marcas->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{method_field('PATCH')}}
      @include('marca.form')
   </form>
</div>
@endsection
