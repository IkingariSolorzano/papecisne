@extends('layouts.app')
@section('content')
<div class="container">
   <h2>Registrar nueva marca</h2>
   <form action="{{ url('/marca') }}" method="post" enctype="multipart/form-data">
      @csrf
      @include('marca.form')
   </form>
</div>
@endsection
