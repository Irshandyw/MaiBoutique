@extends('main')

@section('container')
<style>
    .card{
        background-color: pink;
    }
    .card-header{
        text-align: center;
    }
    .Register{
        text-align: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>

@endsection
