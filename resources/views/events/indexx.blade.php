@extends('layouts.app')
@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="">
        <h1>
            Trial events
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2">
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center
        }

        img {
            max-width: 100%
        }

        .image {
            flex-basis: 40%
        }

        .text {
            font-size: 20px;
            padding-left: 20px;
        }
    </style>
    <div class="container">
        <div class="image">
            <img src="https://cdn.pixabay.com/photo/2021/12/06/06/10/soccer-6849344_1280.jpg" alt="">
        </div>
        <div class="text">
            <h2>
                First event
            </h2>
            <span>

            </span>
            <p>
                this is the very first event of this year's season can't wait to see all of you players on the field
            </p>
            <a href="">
                keep reading
            </a>
        </div>
    </div>
</div>

@include('footer')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset ('css/app.css')}}">
@endsection
