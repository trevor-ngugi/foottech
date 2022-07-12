@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{route('images.add')}}" class="btn btn-primary mb-2">Create Post</a> 
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
          <td>
         <img src="{{ url('public/Image/'.$data->image) }}"
            style="height: 100px; width: 150px;">
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