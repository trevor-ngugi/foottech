@extends('layouts.app')

@section('content')
<div class="container">
    <h3>View all image</h3><hr>
      </table>
         <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->tittle}}</td>
          <td>
         <img src="{{ url('public/Image/'.$data->image) }}"
            style="height: 100px; width: 150px;">
         </td>
         <td>
          <a href="events/{{$data->id}}" class="btn btn-primary">Show</a>
          </td>
        </tr>
        @endforeach
      </tbody>  
    </table>
 </div>
  <div>
        @include('footer')
  </div>
@endsection