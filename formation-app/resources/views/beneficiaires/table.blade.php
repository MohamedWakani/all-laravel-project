<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="beneficiaires-table">
            <thead>
            <tr>
                <th>Ppr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Formation</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($beneficiaires as $beneficiaire)
                <tr>
                    <td>{{ $beneficiaire->ppr }}</td>
                    <td>{{ $beneficiaire->name }}</td>
                    <td>{{ $beneficiaire->emqil }}</td>
                    <td>{{ $beneficiaire->formation->formation_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['beneficiaires.destroy', $beneficiaire->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('beneficiaires.show', [$beneficiaire->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('beneficiaires.edit', [$beneficiaire->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $beneficiaires])
        </div>
    </div>
</div>
