@extends('layouts.app')

@section('title','pagina show')

@section('content')
    <h1>ELENCO PLAYERS</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">COGNOME</th>
            <th scope="col">NAZIONALITA'</th>
            <th scope="col">RUOLO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> {{ $player->id }} </th>
                <td> {{ $player->nome }} </td>
                <td> {{ $player->cognome }} </td>
                <td> {{ $player->nazione }} </td>
                <td> {{ $player->ruolo }} </td>
                <td><a href="{{ route('players.edit', ['player' => $player->id]) }}">modifica</a></td>
                <td>
                    <form action="{{ route('players.destroy', $player->id) }}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger">ELIMINA</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection