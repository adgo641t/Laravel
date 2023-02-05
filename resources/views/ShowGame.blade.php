@extends('layout.navbar')

@section('content')

    <div class="container col-lg-12 col-md-6 col-sm-3" style="font-family: 'Games', sans-serif;">
       <div class="row">
        <h1 style="text-align:center">Video of the game</h1>
        <div>
            <br>
            <iframe style="display:block; margin-left: auto; margin-right:auto;" width="750" height="315" src="https://www.youtube.com/embed/G53bD9LRJ1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        </div>
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
       <br>
       <h1 style="text-align: center">How to Find the University</h1>
       <br>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3008908371335!2d2.113551415637059!3d41.389271503840874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a499516b19fb47%3A0xb0986fb4693842a4!2sUniversidad%20Polit%C3%A9cnica%20de%20Catalu%C3%B1a%20%C2%B7%20Barcelona%20Tech%20-%20UPC!5e0!3m2!1ses!2ses!4v1675616366434!5m2!1ses!2ses" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>   
    </div>
    <br>
    <br>
    <br>
    <br>
    </div>
@endsection

<footer class="text-center text-white" style="background-color: #f1f1f1;   position: fixed;
   bottom: 0;
   width: 100%;">

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:<b> Diseñado por Adrian</b>
  </div>
  <!-- Copyright -->
    </footer>
