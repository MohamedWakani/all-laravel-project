@extends('welcome')

@section('content')

    <div class="bgbg container-fluid">
        <h1 class="bg-title text-light-50">Welcome {{ Auth::user()->name }} to your account
            </p>
        </li></h1>
    </div>
@endsection
