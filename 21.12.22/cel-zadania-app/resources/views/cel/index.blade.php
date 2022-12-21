@extends('layout.app')

@section('tresc')

<h1>Cele 2022</h1>

@if(count($cele) > 0)
    @foreach($cele as $cel)
        <a href="cel/{{$cel->id}}"> <h2> {{ $cel->nazwa }}</h2> </a>
    @endforeach
@endif

@endsection