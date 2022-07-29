@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/scout" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">add a scout</h1>
                <p>Fill and submit this form to add a scout</p>

                <hr>

                <form action=" "method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">scout name</label>
                            <input type="text" id="title" class="form-control" name="scout_name" placeholder="Enter scout name" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="body">scout role</label>
                            <!-- <textarea id="role" class="form-control" name="role" placeholder="Enter scout role" rows="" required></textarea> -->
                            <input type="text" id="role" class="form-control" name="role" placeholder="Enter role" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="body">scout team</label>
                            <textarea id="team" class="form-control" name="team" placeholder="Enter team name" rows="" ></textarea>
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