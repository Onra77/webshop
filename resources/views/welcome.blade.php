@extends('layout')
@section('title', 'Home - Webshop') 
@section('content')

<div id="blog">
<h1>Welkom!</h1>

<ul>
    @foreach ($tasks as $task) 
        <li>{{ $task }}</li>
    @endforeach
</ul>
</div>
@endsection