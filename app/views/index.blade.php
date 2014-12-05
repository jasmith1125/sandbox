@extends('_master')

@section('content')
    <div class="large-10 columns">
        <h1>All Chores</h1>
    </div>

    
    @if ($chores->isEmpty())
        <p>There are no chores! :(</p>
    @else
        <table class="large-10 large-centered columns">
            <thead class="choreheader">
                <tr>
                    <th width="500">Chore Description</th>
                    <th width="100">Completed?</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chores as $chore)
                <tr>
                    <td>{{ $chore->description }}</td>
                    <td>{{ $chore->completed ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('ChoreController@edit', $chore->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('ChoreController@delete', $chore->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="large-2 push-9 columns">
        <div class="panel-body">
            <a href="{{ action('ChoreController@create') }}" class="button">Create Chore</a>
        </div>
    </div>

    @endif
@stop