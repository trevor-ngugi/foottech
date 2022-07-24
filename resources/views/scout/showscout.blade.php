@extends('layouts.app')

@section('content')

<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Scouts/Team manager hub </h2>
            <p class="text-center">this are the available scouts and team managers on the platform</p>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="assets/img/1.jpg">
                    <h3 class="name">Ben Johnson</h3>
                    <p class="title">scout</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="assets/img/2.jpg">
                    <h3 class="name">Emily Clark</h3>
                    <p class="title">scout</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Carl Kent</h3>
                    <p class="title">team manager</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>




@endsection
@section('css')
<link rel="stylesheet" href="{{asset ('css/scout.css')}}">
@endsection