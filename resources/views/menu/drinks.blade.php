@extends('main.master')

@section('title')
    All foods
@stop

@section('header')
    <style>
        .imageContainer {
           width:"100%"; 
           height:200px; 
           background-image: url("images/drinks/drinks-bg.jpeg");
        }
        .word {
            position: absolute;
            top: 200px;
            left: 100px;

            color: #ff471a;
        }
    </style>
@stop

@section('content')

    <div class="container-fluid bg-1 text-center">
        <div class="imageContainer"><h2 class="word">Drinks</h2></div>
    <!-- <img src="images/pastriessweets/pastries_sweets_bg.jpeg" alt="pastries and sweets bg" width="100%" height="200px"> -->
    </div>
    <br />
    <br />
    @if(sizeof($foods) == 0)
        You have not added any food, you can <a href='/book/create'>add food now to get started</a>.
    @else
    <div class="container">
<!--         <h2>Freshly baked breads</h2>
        <p>reserved!</p>  -->
        <div class="row">           
        @foreach($foods as $food)
        
            <div class="col-md-4" >
                <div class="thumbnail">
                    
                    <img src="{{$food->cover}}" alt="{{$food->name}}" >
                    <p>{{$food->name}}</p>
                </div>
            </div>
        
        @endforeach
        </div>
    </div>
    @endif
@stop