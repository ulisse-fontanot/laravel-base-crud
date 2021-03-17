@extends('layouts.app')

@section('title','pagina show')

@section('content')
    <h1>ELENCO PLAYERS</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">COGNOME</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <th scope="row"> {{ $player->id }} </th>
                    <td> {{ $player->cognome }} </td>
                    <td><a href="{{ route('players.show', ['player' => $player->id]) }}">dettagli</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection