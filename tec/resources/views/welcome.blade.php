@extends('layoute')
@section('content')
    <h1 class="h1-list">
        List Des Agents</h1>
    <center>
        <form action="{{ url('/') }}" method="post">
            @csrf
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profs as $item)
                        <tr>
                            <td><input type="checkbox" name="name[]" value="{{ $item->name }}"></td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <br><br>

            <select name="formation_id">
                <option value="">Select Formation</option>
                @foreach ($formation as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select><br><br><br>
            <input type="submit" value="Submit">
        </form>
        @if (Session::has('message'))
            <script>
                swal("Message Sended", "{{ Session::get('message') }}", 'success', {
                    button: true,
                    button: 'OK',
                    timer: 3000
                });
            </script>
        @endif
    </center>
@endsection
