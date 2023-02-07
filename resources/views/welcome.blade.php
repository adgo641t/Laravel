@extends('layout.navbar')

@section('title', 'Home Page | Multijuegos')
 
@section('content')
<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://icebreakerideas.com/wp-content/uploads/2021/04/Pictionary-Game-e1619834659484.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://files.realpython.com/media/Build-an-AI-Game-Engine-for-Tic-Tac-Toe-in-Python_Watermarked.b90cdf84c417.jpg" alt="Second slide">
      </div>
    </div>
  </div>
  </div>
<!-- 
@foreach($GameCreators as $GameCreator)
    <li>Name: {{$GameCreator['Name']}}</li>
    <li>Description: {{$GameCreator['Description']}}</li>
@endforeach
<br>

<h1>The Web Developers</h1>

@foreach($WebDevelopers as $WebDeveloper)
    <li>Name: {{$WebDeveloper['Name']}}</li>
    <li>Description: {{$WebDeveloper['Description']}}</li>
@endforeach -->

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