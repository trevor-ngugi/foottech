@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/scouttutorial" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Post</h1>
                    <p>Edit and submit this form to update a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">scout name</label>
                                <input type="text" id="scout_name" class="form-control" name="scout_name"
                                       placeholder="Enter Post Title" value="{{ $scoutt->name }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">scout bio</label>
                                <textarea id="bio" class="form-control" name="bio" placeholder="Enter Post Body"
                                          rows="5" required>{{ $scoutt->bio }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection