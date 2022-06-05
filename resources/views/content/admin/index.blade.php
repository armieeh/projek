@extends('layouts.Admin.main')

@section('content')
    
    <h1>Hallo {{ auth()->user()->name }}</h1>
    <p>Selamat datang dihalaman admin</p>
@endsection