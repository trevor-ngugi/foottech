@extends('layouts.app')
@section('content')
    <div class="container">
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
    </div>
@endsection