@extends('layout')

@section('title')
    Личный кабинет
@endsection

@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp

@section('content')
    <div class="container mt-5">
        <a href="{{route('logout')}}">Выйти</a>
        <h1>Добро пожаловать</h1>
        <p>{{$user->name}}</p>
    </div>
@endsection
