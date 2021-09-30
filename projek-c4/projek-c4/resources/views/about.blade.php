@extends('layouts.main')
@section('container')
        <h1>Halaman About</h1>
        <h5>{{ $nama }}</h5>
        <h5>{{ $email }}</h5>
        <img src="img/{{ $img }}" width="300" class="img-thumbnail rounded-circle">
@endsection