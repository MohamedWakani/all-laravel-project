@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Formation</h2>
        <form action="{{ url('formations') }}"  method="post">
            @csrf
            <div class="form-group">
                <label for="name">Formation Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Formation</button>
        </form>
    </div>
@endsection
