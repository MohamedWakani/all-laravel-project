<!-- Formation Name Field -->
<div class="col-sm-12">
    {!! Form::label('formation_name', 'Formation Name:') !!}
    <p>{{ $formation->formation_name }}</p>
</div>

<!-- Fonc Id Field -->
<div class="col-sm-12">
    {!! Form::label('fonc_id', 'Fonc Id:') !!}
    <p>{{ $formation->fonc_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $formation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $formation->updated_at }}</p>
</div>

