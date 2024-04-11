@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
        <img src="/img/pizza.jpg"  alt="pizza">
        <h1>Pizza Orders</h1>
            
            @foreach($pizzas as $pizza)
            <div class="pizza-item">
                
                <h4><a href="{{route('pizzas.show',$pizza->id)}}"><img src="img/pizza-icon.png" alt="pizza icon">{{$pizza->name }}</a></h4>
            </div>
            @endforeach
</div>
@endsection