@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
    <img src="{{ $img }}" alt="Eko Budi" width="250px">
@endsection
