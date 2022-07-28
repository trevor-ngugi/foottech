@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/scouttutorial" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">add a scout</h1>
                    <p>Fill and submit this form to create a post</p>

                    <hr>

                    <form action="{{url('/scouttutorial/create/post')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">scout name</label>
                                <input type="scout_name" id="title" class="form-control" name="scout_name"
                                       placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">scout role</label>
                                <textarea id="role" class="form-control" name="role" placeholder="Enter Post Body"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">scout bio</label>
                                <textarea id="bio" class="form-control" name="bio" placeholder="Enter bio Body"
                                          rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create scout
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection