@extends('main.master')

@section('title')
    P4
@stop

@section('header')
    <h1 class="text-center">Daisy Cafe House</h1>
@stop

@section('content')
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/brunch_1.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Red, white and green.</h3>
          <p>Brighten your morning with every colorful bite of our Mediterranean Egg White Breakfast Sandwich.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/brunch_2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Go for asiago</h3>
          <p>One of our most craveable bagels is just what your morning is missing.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/brunch_3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>LIEGE Waffle</h3>
          <p>Soft ‘n chewy! Made from a dough with caramelized Belgian pearl sugar.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/brunch_4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>For Every Occasion</h3>
          <p>Give Daisy cafe house and make their day.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@stop