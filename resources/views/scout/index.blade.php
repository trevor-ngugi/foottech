@extends('layouts.app')
@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Our scouts!</h1>
                    <p>Enjoy reading our posts. Click on a scout to view!</p>
                </div>
                <div class="col-4">
                    <p>Create new Post</p>
                    <a href='/scouttutorial/create/post' class="btn btn-primary btn-sm">Add Post</a>
                </div>
            </div>
            @forelse($scouts as $scout)
            <ul>
                <li><a href="/scouttutorial/{{ $scout->id }}">{{ ucfirst($scout->scout_name) }}</a></li>
            </ul>
            @empty
            <p class="text-warning">No blog Posts available</p>
            @endforelse
        </div>
    </div>
</div> -->
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Scouts/Team manager hub </h2>
            <p class="text-center">this are the available scouts and team managers on the platform</p>
        </div>

        <div class="row people">
            @forelse($scouts as $scout)
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="assets/img/1.jpg">
                    <h3 class="name">{{ ucfirst($scout->scout_name) }}</h3>
                    <p class="title">{{ ucfirst($scout->role) }}</p>
                    <p class="description">{{ ucfirst($scout->team) }} </p>
                    <a href="/scout/{{ $scout->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            @empty
            <p class="text-warning">No scouts available</p>
            @endforelse
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset ('css/scout.css')}}">
@endsection