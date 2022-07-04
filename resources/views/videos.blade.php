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

{{ trans_choice('{0} no like|{1} :count like|[2,*] :count likes', count($model->likes), ['count' => count($model->likes)]) }}

@can('like', $model)
    <form action="{{ route('like') }}" method="POST">
        @csrf
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button>@lang('Like')</button>
    </form>
@endcan

@can('unlike', $model)
    <form action="{{ route('unlike') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button>@lang('Unlike')</button>
    </form>
@endcan

     <div>
        @include('footer')
    </div>
@endsection

