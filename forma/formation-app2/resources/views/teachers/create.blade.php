@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ url('/teachers/store') }}">
            @csrf
            <h3>Create Teacher</h3>
            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control w-50"><br>
            </div>
            <div>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control w-50"><br>
            </div>
            <div>
                <select name="institution_id"  class="form-select w-50">
                    <option value="">Select Institution</option>
                    @foreach ($institution as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Select Teachers</button>
        </form>
    </div>
@endsection
