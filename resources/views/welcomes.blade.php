@extends('layout')
@section('title', 'Home')
@section('content')

@if (Auth::user()==null)
<div class="text">
    <div class="judul">
        <h1>Welcome to <u style=" text-decoration-color: aqua;">MaiBoutique</u></h1>
    </div>
    <p class="bawah">Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>
    <div class="signup">
    <button type="button" class="btn btn-primary" style="width: 180px;height: 50px">
        <a href="/register" style="font-size:18 ;text-decoration-color:white; color: white;">SIGN UP NOW</a>
    </button>
    </div>
</div>
@else
<div class="judul">
    <h1>Welcome {{ Auth::user()->name }}</h1>
</div>
<div class="row justify-content-center">
    <div class="row ">

@foreach ( $items as $item )
<div class="col-md-3">
    <div class="card mb-3" style="width: 18rem;">
        <img src="{{ $item->image }}" class="card-img-top" alt="celanapendek">
        <div class="card-body">
        <h5 class="card-title">{{ $item->name }}</h5>
        <p class="card-text">{{ $item->price }}</p>
        <a href="#" class="btn btn-primary">More Detail</a>
        </div>
    </div>
</div>

@endforeach
</div>
</div>
@endif


@endsection
<style>
    .text {
        display: block;
        padding-top: 150px;
        color: white;
        justify-content: center;
        align-items: center;


    }

    .judul {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bawah {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        font-size: 20;
        opacity: 0.5;
    }
    .signup{
        display: flex;
        justify-content: center;

    }


</style>
