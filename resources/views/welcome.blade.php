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
