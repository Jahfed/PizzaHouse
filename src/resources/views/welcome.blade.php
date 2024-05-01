@extends('layouts.layout')

@section('content')
    <div class="main">
        <img src="/img/pizza.jpg"  alt="pizza">
        <h1>Very nice Pizzas!</h1>
        <p class="mssg">{{session('mssg')}}</p>
        
        @auth
        <a href="{{route('pizzas.index')}}">See orders</a>
        <br><br>
        <a href="/profile">My Profile</a>
        <br><br><br><br>
        @endauth
        <a href="{{route('pizzas.create')}}">Order a pizza...</a>
    </div>
</div>
@endsection