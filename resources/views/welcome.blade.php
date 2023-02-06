@extends('layout.navbar')

@section('title', 'Weclome Page')
 
@section('content')

<h1>Welcome to the Multijuegos Home</h1>
<br>

<h1>The Game Creators Team</h1>

@foreach($GameCreators as $GameCreator)
    <li>Name: {{$GameCreator['Name']}}</li>
    <li>Description: {{$GameCreator['Description']}}</li>
@endforeach
<br>

<h1>The Web Developers</h1>

@foreach($WebDevelopers as $WebDeveloper)
    <li>Name: {{$WebDeveloper['Name']}}</li>
    <li>Description: {{$WebDeveloper['Description']}}</li>
@endforeach

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