@extends('layouts.app')

@section('content')

    @include()

<h1> Pagina de contacto </h1>

@if (count($people))

    @foreach($people as $person)

        <li> - {{$person}} </li>

    @endforeach

@endif

@stop

@section('footer')

{{--  <script>alert('Hello visitor')</script>  --}}

@stop
