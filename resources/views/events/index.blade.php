@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{route('images.add')}}" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                    <table class="table">
      <thead>
        <tr>
          <th colspan="5">Upcoming Events</th>
        </tr>
        <tr>
          <th>id</th>
          <th>Image</title></th>
          <th>Title</th>
          <th>Date</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
         <img src="{{ url('public/Image/'.$data->image) }}"
            style="height: 100px; width: 150px;">
         </td>
          <td>{{$data->title}}</td>
          <td>{{ date('Y-m-d', strtotime($data->created_at)) }}</td>
          <td>{{$data->body}}</td>
         <td>
         <a href="events/{{$data->id}}/edit" class="btn btn-primary">Edit</a>
         </td>
         <td>
         <a href="events/{{$data->id}}/show" class="btn btn-primary">show</a>
          </td>
          <td>
          <form action="events/{{$data->id}}" method="post" class="d-inline">
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