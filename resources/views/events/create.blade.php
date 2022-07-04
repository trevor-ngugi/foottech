@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Event') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Event Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Event Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
<!-- 
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="Image" />
                        </div>  -->

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control">
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