@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List of Institutions</h2>
        @foreach($institutions as $institution)
            <p>{{ $institution->name }}</p>
        @endforeach
    </div>
@endsection
