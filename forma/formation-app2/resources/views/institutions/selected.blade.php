@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Selected Institution</h2>
        <p>Name: {{ $institution->name }}</p>
        <p>Description: {{ $institution->description }}</p>
        <!-- You can display more information about the selected institution here -->
    </div>
@endsection
