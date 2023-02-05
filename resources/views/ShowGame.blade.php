@extends('layout.navbar')
@section('content')

    <div class="container" style="font-family: 'Games', sans-serif;">
        <br>
        <h1 style="text-align: center">The Winners Table</h1>
        <br>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Game</th>
                    <th scope="col">Players</th>
                    <th scope="col">Date</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Winner</th>
                </tr>
            </thead>
            <tbody>    
            @foreach($dataTable as $partida)
            <tr>
                <td 
                @if($partida->juego == 1)
                {{$partida->juego = 'Oca'}}
                @elseif($partida->juego == 2)
                {{$partida->juego = 'Pictionary'}}
                @endif>{{$partida->juego}}</td>
                <td>{{$partida->jugadores}}</td>
                <td>{{$partida->fecha}}</td>
                <td>{{$partida->hora}}</td>
                <td>{{$partida->ganador}}</td>
            </tr>  
        </tbody>       
            @endforeach
       </table>
       </div>
    </div>

@endsection
