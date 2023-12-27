@extends('layoute')
@section('content')
<h1 class="h1-list">Ajouter un Agent</h1>
<div class="form-agent">
    <form action="{{url('storeProf')}}" method="post">
        @csrf
        <div class="inp">
            <label for="name">Nom Et Prenom</label><br>
            <input type="text" name="name" placeholder="votre nom et prenom" id="name">
        </div><br>
        <div class="inp">
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="votre email" id="email">
        </div><br>
        <div class="inp">
            <label for="select">Select Institution</label><br>
            <select name="institution_id" id="select">
                <option value="-1">Select Institution</option>
                @foreach ($institution as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div><br>
        <button type="submit" class="btn-agent">Ajouter</button>
    </form>
</div>
@endsection