@extends('main')

@section('container')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->get('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success: </strong>{{ session()->get('message') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">Add items</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('add-items') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="image" class="form-label">Clothes Image</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('iamge')
                                is-invalid
                              @enderror" type="file" id="image" name="image" onchange="previewImage()">
                              @error('image')
                              <div class="invalid-feedback">
                              {{ $message }}
                              </div>
                            @enderror
                              </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Clothes Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="(5-20 character)"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Clothes desc') }}</label>

                                <div class="col-md-6">
                                    <input id="desc" placeholder="(min 5 letters)"
                                        class="form-control @error('desc') is-invalid @enderror" name="desc"
                                        value="{{ old('desc') }}" required autocomplete="desc">

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Clothes price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" placeholder=">1000" required
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        value="{{ ('price') }}" required autocomplete="price" autofocus>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stock"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Clothes Stock') }}</label>

                                <div class="col-md-6">
                                    <input id="stock" placeholder=">1" type="number"
                                        class="form-control @error('stock') is-invalid @enderror" name="stock"
                                        value="{{ ('stock') }}" required autocomplete="stock" autofocus>

                                    @error('stock')
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
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
