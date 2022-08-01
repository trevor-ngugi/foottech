@extends('layouts.app')
@section('content')

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