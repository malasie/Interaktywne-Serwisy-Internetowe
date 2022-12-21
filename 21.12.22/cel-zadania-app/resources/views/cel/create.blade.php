@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        Wstecz
    </a>

    <form
    class="container"
    action="/cel"
    method="POST">

        {{csrf_field()}}

        <div class="form-group">
            <label>Nazwa</label>
            <input type="text" name="nazwa" class="form-control">
        </div>

        <div class="form-group">
            <label>Tresc</label>
            <input type="text" name="tresc" class="form-control">
        </div>

        <div class="form-group">
            <label>termin</label>
            <input type="text" name="termin" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>

    </form>


@endsection