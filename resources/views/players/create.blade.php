@extends('layouts.app')

@section('title','pagina create')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('players.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="campo">NOME</label>
            <input type="text" class="form-control" id="campo" name="nome">
        </div>
        <div class="form-group">
            <label for="campo">COGNOME</label>
            <input type="text" class="form-control" id="campo" name="cognome">
        </div>
        <div class="form-group">
            <label for="campo">NAZIONALITA'</label>
            <input type="text" class="form-control" id="campo" name="nazione">
        </div>
        <div class="form-group">
            <label for="campo">RUOLO</label>
            <input type="text" class="form-control" id="campo" name="ruolo">
        </div>
        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
@endsection