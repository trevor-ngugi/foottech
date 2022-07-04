@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Event') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$event->title}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($event->published_at))}}</p>
                    <br>
                    <div>
                        {{$event->body}}
                    </div>
                    <div>
                        {{$event->image}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div>
        @include('footer')
    </div>
@endsection