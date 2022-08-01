@extends('layouts.app')

@section('content')




<div class="container">

    <div class="row">
        @forelse($teams as $team)
        <div class="col-lg-4">
            <div class="card card-margin">
                <div class="card-header no-border">
                    <h5 class="card-title">team {{$team->id}}</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="widget-49">
                        <div class="widget-49-title-wrapper">
                            <div class="widget-49-date-primary">
                                <!-- insert image -->

                                <span class="widget-49-date-day">09</span>
                                <span class="widget-49-date-month">apr</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">{{ucfirst($team->team_name)}}</span>

                            </div>
                        </div>
                        <ol class="widget-49-meeting-points">
                            <li class="widget-49-meeting-item"><span>no of players</span></li>
                            <li class="widget-49-meeting-item"><span>hiring or full</span></li>
                        </ol>
                        <div class="widget-49-meeting-action">
                            <a href="{{route('teamprofile')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        @empty
        <p class="text-warning">No blog Posts available</p>
        @endforelse
    </div>
</div>


</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset ('css/team.css')}}">
@endsection