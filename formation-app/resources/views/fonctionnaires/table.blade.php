<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="fonctionnaires-table">
            <thead>
            <tr>
                <th>Ppr</th>
                <th>Name</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fonctionnaires as $fonctionnaire)
                <tr>
                    <td>{{ $fonctionnaire->ppr }}</td>
                    <td>{{ $fonctionnaire->name }}</td>
                    <td>{{ $fonctionnaire->email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['fonctionnaires.destroy', $fonctionnaire->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('fonctionnaires.show', [$fonctionnaire->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('fonctionnaires.edit', [$fonctionnaire->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $fonctionnaires])
        </div>
    </div>
</div>
