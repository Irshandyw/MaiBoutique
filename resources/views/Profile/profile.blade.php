@extends('main')

@section('container')
    <div class="mt-5 text-center row justify-content-center">
        <div class="rounded border border-dark" style="width: 18rem;">
            <h1>My Profile</h1>
            @if (auth()->user()->email == 'bypass@gmail.com')
                <a class="btn btn-danger">Admin</a>
                <p class="card-text"><strong>{{ auth()->user()->name }}</strong></p>
                <p class="card-text">{{ auth()->user()->email }}</p>
                <p class="card-text">{{ auth()->user()->address }}</p>
                <p class="card-text">{{ auth()->user()->phone }}</p>
                <div class="d-grid gap-2 d-md-block">
                    <a  href="/change-pass"><button class="btn btn-outline-primary" type="button">Edit Password</button></a>
                    <br>
                    <br>
                </div>
            @else
                <a class="btn btn-secondary">Member</a>

                <p class="card-text"><strong>{{ auth()->user()->name }}</strong></p>
                <p class="card-text">{{ auth()->user()->email }}</p>
                <p class="card-text">{{ auth()->user()->address }}</p>
                <p class="card-text">{{ auth()->user()->phone }}</p>
                <div class="d-grid gap-2 d-md-block">
                    <a href="/edit-profile"><button class="btn btn-primary" type="button">Edit Profile</button></a>
                    <a  href="/change-pass"><button class="btn btn-outline-primary" type="button">Edit Password</button></a>
                    <br>
                    <br>
                </div>
            @endif
        </div>
    </div>
@endsection
