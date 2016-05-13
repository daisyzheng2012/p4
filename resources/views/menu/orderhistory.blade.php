@extends('main.master')

@section('title')
    Past Orders
@stop



@section('content')



    <div class="container">
      <div class="panel">
        <div class="panel-heading" style="background-color:#af5026; color:#ffffff">My Past Orders</div>
        <div class="panel-body">
        @if(sizeof($orders) == 0)
            <h5>No order entry found, you can <a href='/foods'>order foods here</a></h5>
        @else
          <table class="table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Order Information</th>
                <th>Order Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order) 
              <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->orderinfo}}</td>
                <td>{{$order->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @endif
        </div>
        <div class="panel-footer" style="background-color:#af5026; color:#ffffff">
            
        </div>
      </div>

    </div>



@stop