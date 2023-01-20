@extends("main")
@section("container")
<form action="/search" class="d-flex mt-5" >
    <div class="input-group m-4 d-flex justify-content-center">
        <input type="text" class="form-control me-2" placeholder="What are you searching for?" name="search" value="{{request('search')}}">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
</form>

<div class="row justify-content-center">
    <div class="row ">

@foreach ( $items as $item )
    <div class="col-md-3">
        <div class="card mb-3" style="width: 18rem;">
            <img src="{{ $item->image }}" class="card-img-top" alt="celanapendek">
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
