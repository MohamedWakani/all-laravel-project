<!-- Ppr Field -->
<div class="col-sm-12">
    {!! Form::label('ppr', 'Ppr:') !!}
    <p>{{ $beneficiaire->ppr }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $beneficiaire->name }}</p>
</div>

<!-- Emqil Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $beneficiaire->email }}</p>
</div>

<!-- Formation Id Field -->
<div class="col-sm-12">
    {!! Form::label('formation_id', 'Formation Id:') !!}
    <p>{{ $beneficiaire->formation_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $beneficiaire->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $beneficiaire->updated_at }}</p>
</div>

