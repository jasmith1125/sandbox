@extends('_master')

@section('content')
    <div class="large-10 columns">
        <h1>Create Chore</h1>
    </div>

    <form action="{{ action('ChoreController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" class="form-control" name="description" />
        </div>
        <div class="checkbox">
            <label for="completed">
                <input type="checkbox" name="completed" /> Completed?
            </label>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ChoreController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop