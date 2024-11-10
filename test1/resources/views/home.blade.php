@extends('layout')
@section('content')
<h1>Welcome-Home</h1>
<p>You can find everything about laravel here</p>

<section class="header section-padding">
 <div class="background">&nbsp;</div>
 <div class="container">
<div class="header-text">
 <h1>Learning Laravel: The Easiest Way</h1>
<p>
This is our to do list!<br>
built using laravel 11 framework
</p>
</div>
</div>
</section>
 <div class="container">
 <section class="section-padding">
 <div class="jumbotron text-center">
<div class="panel panel-default">
<div class="panel-heading">
</div>
</div>

</div>
</section>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
 
      <div class="carousel-inner">

  

    

            <div class="carousel-item active list-inline">

              <img src="{{URL::asset('/image/224.jpg')}}" class="d-inline-block w-20 " alt="">
              <img src="{{URL::asset('/image/239.jpg')}}" class="d-inline-block w-20 " alt="">
              <img src="{{URL::asset('/image/257.jpg')}}" class="d-inline-block w-20 " alt="">
              <img src="{{URL::asset('/image/369.jpg')}}" class="d-inline-block w-20 " alt="">
              <img src="{{URL::asset('/image/527.jpg')}}" class="d-inline-block w-20 " alt="">


            </div>
            
            <div class="carousel-item ">

              <img src="{{URL::asset('/image/567.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/584.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/623.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/673.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/383.jpg')}}" class="d-inline-block w-20" alt="">

            </div>
            
            <div class="carousel-item ">

              <img src="{{URL::asset('/image/ghalam9.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/kif03.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/kif04.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/kifdashboard2.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/porzgir3.jpg')}}" class="d-inline-block w-20" alt="">

            </div>
            
            <div class="carousel-item ">

              <img src="{{URL::asset('/image/negahdarande3.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/safisink.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/lamp1.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/140.jpg')}}" class="d-inline-block w-20" alt="">
              <img src="{{URL::asset('/image/17.jpg')}}" class="d-inline-block w-20" alt="">

            </div>

        

  

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <span class="visually-hidden">Previous</span>

      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        <span class="visually-hidden">Next</span>

      </button>

    </div>

</div>



@endsection