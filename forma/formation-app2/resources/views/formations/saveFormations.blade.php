@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Saved Formations</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $item)
                    <tr>
                        <td>
                            <p>{{ $item->id }}</p>
                        </td>
                        <td>
                            <p>{{ $item->name }}</p>
                        </td>
                        <td>
                            <p>{{ $item->description }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
@endsection
