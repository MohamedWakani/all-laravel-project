@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Select an Institution</h2>
        <form method="post" action="{{ route('institutions.select') }}">
            @csrf
            <select name="institution_id">
                @foreach($institutions as $institution)
                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Select Institution</button>
        </form>
    </div>
@endsection
