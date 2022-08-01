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

                    
                    <h2>{{$imageData->title}}</h2>

                   <p>Ends At: {{date('Y-m-d', strtotime($imageData->published_at))}}</p>
                    <br>
                    <div>
                        {{$imageData->body}}
                    </div>
                    <br>
                    <div>
                    <img src="{{ url('public/Image/'.$imageData->image) }}"
                      style="height: 200px; width: 250px;">
                    </div>
                    <br>
                    <a class="btn btn-primary" href="{{route('images.view')}}">Return</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div>
        @include('footer')
    </div>
@endsection