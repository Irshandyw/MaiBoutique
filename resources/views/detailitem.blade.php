@extends('main')
@section('container')

<div style="height: 79vh">
    <div style="display: flex;padding: 100px;gap: 50px;align-items: center;height: 100%;" >
        <img src="../<?php echo $row->image?>" class="card-img-top" style="width: 20%" >
        <div class="card-body" style="padding: 90px">
           <h1><b><?php echo $row->name?><br></b></h1>
            <h3>Rp. <?php echo $row->price?> </h3></b>
            <br>
           <b>Product Detail</b>
            <br>
            <?php echo $row->desc?>
            <br><br>


                  <h5 class="card-title">stock : <?php echo $row->stock?></h5>
<br>
<div>
Quantity <br>
<form action="POST" action="addtocart">
    @csrf
    <div class="row mb-3">
        <label for="name"
            class="col-md-4 col-form-label text-md-end">{{ __('Clothes Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="number" placeholder="can't exceed stock"
                class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Add') }}
            </button>
        </div>
    </div>
</form>
<div class="card-footer">
    <a href="/isi"><button class="btn btn-danger">Back</button></a>
</div>
</div>

    </div>
    </div>

    </div>
    @endsection
