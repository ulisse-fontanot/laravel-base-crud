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

    <form action="{{ route('players.update', ['player' => $player->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="campo">NOME</label>
            <input name="nome" value="{{ $player->nome }}" type="text" class="form-control" id="campo">
        </div>
        <div class="form-group">
            <label for="campo">COGNOME</label>
            <input name="cognome" value="{{ $player->cognome }}" type="text" class="form-control" id="campo">
        </div>
        <div class="form-group">
            <label for="campo">NAZIONALITA'</label>
            <input name="nazione" value="{{ $player->nazione }}" type="text" class="form-control" id="campo">
        </div>
        <div class="form-group">
            <label for="campo">RUOLO</label>
            <input name="ruolo" value="{{ $player->ruolo }}" type="text" class="form-control" id="campo">
        </div>
        <button type="submit" class="btn btn-primary">MODIFICA</button>
    </form>
@endsection