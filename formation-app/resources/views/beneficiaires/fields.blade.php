<!-- Ppr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ppr', 'Ppr:') !!}
    {!! Form::text('ppr', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Emqil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('emqil', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Formation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formation_id', 'Formation Id:') !!}
    <select class="form-control custom-select" name="formation_id" id="">
        <option value="-1">Select Formation</option>
        @foreach($benefi as $item)
        <option value="{{$item->id}}">{{$item->formation_name}}</option>
        @endforeach
    </select>
</div>