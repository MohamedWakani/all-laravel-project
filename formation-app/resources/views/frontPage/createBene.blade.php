@extends('welcome')
@section('content')
<center>
<h1 class="h3 alert center w-50 alert-primary text-center text-secondary mt-5 ">{{__('private.remplireVotreInformations')}}</h1>


<form action="{{url('/store')}}" method="post">
    @csrf
<!-- Ppr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ppr', 'Ppr:') !!}
    {!! Form::text('ppr', null, ['class' => 'form-control', 'required']) !!}
</div><br>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <label for="name">{{__('private.fullName')}}</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div><br>

<!-- Emqil Field -->
<div class="form-group col-sm-6">
    <label for="emqil">{{__('private.email')}}</label>
    {!! Form::text('emqil', null, ['class' => 'form-control', 'required']) !!}
</div><br>

<!-- Formation Id Field -->
<div class="form-group col-sm-6">
    <label for="name">{{__('private.formation')}}</label>
    <select class="form-select custom-select" name="formation_id" id="">
        <option value="-1">{{__('private.selectFroamtion')}}</option>
        @foreach($formation as $item)
        <option value="{{$item->id}}">{{$item->formation_name}}</option>
        @endforeach
    </select><br><br>

</div>
<button class="btn btn-primary form-control w-25"  id="showToastButton" type="submit">Submit</button>
</form>
</center>

@endsection