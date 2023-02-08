@extends('layout.navbar')

@section('title', 'Weclome Page')
 
@section('content')
<!--Slider-->
<div class="container col-lg-12 col-lg-6 col-sm-3">
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
    <br>
    <h1 style="text-align:center">Creators of the Game</h1>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px" src="{{url('/img/Pau.jpg')}}" alt="">
         <br> 
         <h1 style="text-align:center">Pau</h1>
         <p style="text-align:center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus voluptatum veritatis atque labore, accusamus voluptas enim illo, sit consequatur consequuntur, neque accusantium temporibus ducimus sapiente. Ipsam fuga corporis hic officiis?</p>
        </div>
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px" src="{{url('/img/Gerard.jpg')}}" alt="">
          <br>
          <h1 style="text-align:center">Gerard</h1>
          <p style="text-align:center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti alias inventore placeat, accusamus tenetur optio cumque quod sed, maxime quas voluptate atque nulla provident. Fuga ullam commodi illo minima quia.</p>
        </div>
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px"  src="{{url('/img/Enric.jpg')}}" alt="">
          <br>
          <h1 style="text-align:center">Enric</h1>
          <p style="text-align:center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tenetur commodi dolorum aut ipsum aliquid non ut exercitationem praesentium, totam molestiae, molestias pariatur! Quisquam, excepturi! Ipsum quae recusandae odio ullam!</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h1 style="text-align:center">How to find the University</h1>      
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3008908371335!2d2.113551415637059!3d41.389271503840874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a499516b19fb47%3A0xb0986fb4693842a4!2sUniversidad%20Polit%C3%A9cnica%20de%20Catalu%C3%B1a%20%C2%B7%20Barcelona%20Tech%20-%20UPC!5e0!3m2!1ses!2ses!4v1675616366434!5m2!1ses!2ses" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>  
      </div>
      <br>
      <h1 style="text-align:center">Creators of the Web</h1>
      <div class="row">
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px" src="assets/resources/img/Pau.jpg" alt="">
         <br> 
         <h1 style="text-align:center">Pau</h1>
         <p style="text-align:center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus voluptatum veritatis atque labore, accusamus voluptas enim illo, sit consequatur consequuntur, neque accusantium temporibus ducimus sapiente. Ipsam fuga corporis hic officiis?</p>
        </div>
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px" src="assets/resources/img/Gerad.jpg" alt="">
          <br>
          <h1 style="text-align:center">Gerard</h1>
          <p style="text-align:center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti alias inventore placeat, accusamus tenetur optio cumque quod sed, maxime quas voluptate atque nulla provident. Fuga ullam commodi illo minima quia.</p>
        </div>
        <div class="col-sm">
          <img style="display:block; margin-right: auto; margin-left: auto;" class="rounded-circle" width="250px"  src="assets/resources/img/Enric.jpg" alt="">
          <br>
          <h1 style="text-align:center">Enric</h1>
          <p style="text-align:center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tenetur commodi dolorum aut ipsum aliquid non ut exercitationem praesentium, totam molestiae, molestias pariatur! Quisquam, excepturi! Ipsum quae recusandae odio ullam!</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h1 style="text-align: center;">How to Find Provençana</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.499474855661!2d2.112423815726436!3d41.36323180545465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498e7c3a7aa05%3A0x478782c735a4c713!2sInstituto%20p%C3%BAblico%20Proven%C3%A7ana!5e0!3m2!1ses!2ses!4v1675773813217!5m2!1ses!2ses" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <br>
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