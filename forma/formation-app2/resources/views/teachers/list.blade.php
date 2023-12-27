@extends('layouts.app')
@section('content')
<form action="{{ url('/get-teachers-for-formation') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="formation_id">Select a Formation:</label>
        <select class="form-control" name="formation_id" id="formation_id" required>
            <option value="">Select a Formation</option>
            @foreach ($formations as $formation)
                <option value="{{ $formation->id }}">{{ $formation->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Show Teachers</button><br><br><br>
    @if(isset($formation) && isset($teachers))
    <h2>Teachers in {{ $formation->name }}</h2>
    <ul>
        @foreach ($teachers as $teacher)
            <li>{{ $teacher->name }}</li>
        @endforeach
    </ul>
@endif

</form>

@endsection