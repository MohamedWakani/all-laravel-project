<!-- Formation Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formation_name', 'Formation Name:') !!}
    {!! Form::text('formation_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fonc Id Field -->
<div class="form-group col-sm-6">

    {!! Form::label('fonc_id', 'Fonctionnaire:') !!}
    <select class="form-control custom-select" name="fonc_id" id="">
        <option value="-1">Select Fonctionnaire</option>
        @foreach($fonc as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>

</div>