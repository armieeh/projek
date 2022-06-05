@extends('layouts.User.main')

@section('content')
    
    <h1>Hallo {{ auth()->user()->name }}</h1>
    <p>Selamat datang dihalaman user</p>

@endsection