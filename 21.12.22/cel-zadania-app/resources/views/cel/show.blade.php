@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        Wstecz
    </a>

    <h1>
        <a href="cel/{{$cel->id}}">
            {{ $cel->nazwa }}
        </a>
    </h1>
    <span class="badge badge-danger">
        {{$cel->termin}}
    </span>
    <hr>
    <p>{{$cel->tresc}}</p>
@endsection