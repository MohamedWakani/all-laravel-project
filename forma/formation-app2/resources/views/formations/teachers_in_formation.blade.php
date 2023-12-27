@extends('layouts.app')

@section('content')
    <h2>Select a Formation</h2>

    <form method="get" action="{{ url('teachers/in-formation') }}">
        @csrf
        <div class="form-group">
            <label for="formation">Formation:</label>
            <select class="form-control" name="formation_id">
                <option value="">Select a Formation</option>
                <!-- Include formation options dynamically based on your data -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">View Teachers</button>
    </form>
    <h2>Teachers in Selected Formation</h2>

<ul>
    @foreach ($teachers as $teacher)
        <li>{{ $teacher->name }}</li>
    @endforeach
</ul>


    <!-- Display teachers here based on the selected formation -->
@endsection
