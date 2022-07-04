@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Event') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/events/{{$event->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Event Title</label>
                            <input type="text" name="title" class="form-control" value="{{$event->title}}">
                        </div>

                        <div class="form-group">
                            <label for="">Event Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$event->body}}</textarea>
                        </div>

                        <!-- <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="Image" value="{{$event->image}}" />
                        </div>  -->

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($event->published_at)) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    <div>
        @include('footer')
    </div>
@endsection