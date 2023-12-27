<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="formations-table">
            <thead>
            <tr>
                <th>Formation Name</th>
                <th>Fonctionnaire</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->formation_name }}</td>
                    <td>{{ $formation->fonctionnaire->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['formations.destroy', $formation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('formations.show', [$formation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('formations.edit', [$formation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $formations])
        </div>
    </div>
</div>
