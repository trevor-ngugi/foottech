@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{route('create')}}" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                <table class="table table-bordered">
                    <!-- <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ date('Y-m-d', strtotime($event->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($event->created_at)) }}</td>
                            <td>
                            <a href="events/{{$event->id}}" class="btn btn-primary">Show</a>
                            <a href="events/{{$event->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="events/{{$event->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
    <div>
        @include('footer')
    </div>
@endsection