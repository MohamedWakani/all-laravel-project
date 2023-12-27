@extends('layoute')
@section('content')
    <form action="{{ url('/import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <center>

            <!-- Include the existing select dropdown for choosing a formation -->

            <label for="file">Choose Excel File:</label>
            <input type="file" name="file[]" id="file"><br><br>

            <select name="formation_id">
                <option value="">Select Formation</option>
                @foreach ($formation as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select><br><br><br>
        </center>

        <button class="btn-ag btn-agent" type="submit">Upload File</button>
    </form>
@endsection
