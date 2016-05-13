@extends('main.master')

@section('title')
    All foods
@stop

@section('header')
    <style>
        .imageContainer {
           width:"100%"; 
           height:200px; 
           background-image: url("images/bakedbreads/fresh_bread_bg.jpeg");
        }
        .word {
            position: absolute;
            top: 200px;
            left: 150px;

            color: #ff471a;
        }
    </style>
@stop

@section('content')

    <div class="container-fluid bg-1 text-center">
        <div class="imageContainer"><h2 class="word">Fresh&Yummy</h2></div>
    <!-- <img src="images/bakedbreads/fresh_bread_bg.jpeg" alt="fresh bread bg" width="100%" height="200px"> -->
    </div>
    <br />
    <br />
    @if(sizeof($foods) == 0)
        You have not added any food, you can <a href='/foods'>add food now to get started</a>.
    @else
    <div class="container">
<!--         <h2>Freshly baked breads</h2>
        <p>reserved!</p>  -->
        <div class="row">
            <div class="col-md-8 pull-left">

                <div class="row">           
                @foreach($foods as $food)
                
                    <div class="col-md-4" >
                        <div class="thumbnail">
                            
                            <img src="{{$food->cover}}" alt="{{$food->name}}" >
                            <h5 style="text-align:center;">{{$food->name}}</h5> 
                            <button class="btn btn-default form-btn" value="{{$food->name}}" style="display: block; margin: 0 auto;background-color:#af5026">Add to order</button>
                        </div>
                        <br />
                        <br />
                    </div>
                
                @endforeach
                </div>
            </div>
            <div class="col-md-4 pull-right">
                <form role="form" method='POST' action='/foods'>
                    {!! csrf_field() !!}
                    <div class="panel">
                      <div class="panel-heading" style="background-color:#af5026; color:#ffffff">My Orders</div>
                      <div class="panel-body" id="panel-list">
                        <ul class="list-group" id='hehe'>
                            <h5 id="order_note">Pick an order to work on</h5>
                        </ul>
                      </div>
                      <div class="panel-footer clearfix">
                          <button type="submit" class="btn btn-default pull-right order-submit" style="margin: 0 auto;background-color:#af5026;">Check out</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif


<script type="text/javascript">
    $(document).ready(function() {

        $('#hehe li').click(function() {
            var index = $(this).index();
            var text = $(this).text();
            alert('Index is: ' + index + ' and text is ' + text);
            // $(this).remove();
        });

        $('.form-btn').click(function(e) {
            e.preventDefault();
            $('.order-submit').show();
            $('#order_note').remove();
            // alert($(this).attr('value'));
            var btn_val_str = $(this).attr('value');
            
            var arr_btn = btn_val_str.split(" ");

            var btn_val = arr_btn.join('_');
            
            // alert(btn_val);
            
            // $('.list-group').append("<li class='list-group-item'><span class='glyphicon glyphicon-remove' aria-hidden='true'>" + " " + btn_val + "</span>" + "</li>");
            $('.list-group').append("<input type='text' name=" + btn_val + " id='btn' class='list-group-item' value=" + btn_val + " readonly>");
            
        });


    });
</script>



@stop