@extends('main')

@section('container')

<head>
    <title> contoh teks berjalan </title>
</head>
<body>
    <marquee direction='right'> Best Items in Town!!</marquee>
    <marquee direction='left'> Find your best choice!! </marquee>
<body>


    <div class="judul">
        <h1 style="text-align: center">Welcome {{ Auth::user()->name }}</h1>
        <h3 style="text-align: center"> Find your best Clothes Here !</h3>
    </div>
    <div class="row justify-content-center">
        <div class="row ">

    @foreach ( $items as $item )
    <div class="col-md-3">
        <div class="card mb-3" style="width: 18rem;">
            <img src="../{{ $item->image }}" class="card-img-top" alt="celanapendek">
            <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">Rp. {{ $item->price }}</p>
            <a href="/detailitem/{{$item->id }}" class="btn btn-primary">More Detail</a>
            </div>
        </div>
    </div>

    @endforeach
    </div>

    </div>
<div style="justify-content: center; display:flex;">
    {{ $items->links() }}
</div>

@endsection
