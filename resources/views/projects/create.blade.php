@extends('layouts.app')

@section('content')

    <form method="post" action="/projects">
        <h1>Create a Project</h1>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" id="title" name="title" value="">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary">
            <a href="/projects">Cancel</a>
        </div>
    </form>

@endsection
