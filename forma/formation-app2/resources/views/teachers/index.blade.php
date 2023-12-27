@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List of Teachers</h2>
        <a href="teachers/create" class="btn btn-info">Create Teacher</a><br><br>
        <hr><br>
        <form action="{{ url('/teachers') }}" class="form-control w-50" method="GET" id="formationForm">
            @csrf
            <label for="institution_id" class="">Select Institution</label>
            <select name="institution_id" id="institution_id" onchange="submit()" class="form-select w-50">
                <option value="">Select Institution</option>

                @foreach ($institution as $instu)
                    <option value="{{ $instu->id }}"
                        @foreach ($teachers as $item)
                            @if ($instu->id == $item->institution_id)
                             selected 
                            @endif @endforeach>
                        {{ $instu->name }}
                    </option>
                @endforeach
            </select>
        </form><br>
        <form action="{{ url('assign/teachers') }}" method="post"> <!-- Create a new route for teacher assignment -->
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                            <input type="checkbox" name="selected_teachers[]" value="{{ $teacher->id }}">
                        </td>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Select a Formation</h3>
                        <div class="form-group">
                            <label for="formation">Formation:</label>
                            <select class="form-select w-50" id="formation" name="formation_id" required>
                                <option value="">Select a Formation</option>
                                @foreach ($formation as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select><br><br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Assign Teachers</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
