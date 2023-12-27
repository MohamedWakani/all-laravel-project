@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Assign Teachers to Formation</h2>
        <form method="post" action="{{ route('formations.assign', ['id' => $formation->id]) }}">
            @csrf
            <h3>Formation: {{ $formation->name }}</h3>
            <h4>Select Teachers:</h4>
            @foreach($teachers as $teacher)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="teacher_ids[]" value="{{ $teacher->id }}">
                    <label class="form-check-label" for="teacher-{{ $teacher->id }}">
                        {{ $teacher->name }}
                    </label>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Assign Teachers</button>
        </form>
    </div>
@endsection
