@extends('layouts.app')
@section('content')



@foreach($data as $row)
<div class="card" style="width: 21rem;">
    <video id="myvideo" width="320" height="240" controls>
        <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
    </video>
    <script>
        var vid = document.getElementById("myVideo");

        function myFunction() {
            alert(vid.paused);
        }
    </script>
    <div class="card-body">
        <h5 class="card-title">like button,</h5>
        <p class="card-text">caption</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach
     <div>
        @include('footer')
    </div>
@endsection

