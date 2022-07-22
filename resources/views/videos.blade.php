@extends('layouts.app')

@section('content')



@foreach($data as $row)
<div class="card" style="width: 21rem;">
    <p class="card-text">userpic username</p>
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
        <button class="btn"><i class="fa-brands fa-gratipay"></i></button>
        <p class="card-text">user caption</p>
    </div>
</div>
@endforeach
     <div>
        @include('footer')
    </div>
@endsection

