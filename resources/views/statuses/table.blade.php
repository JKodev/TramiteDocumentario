<table class="table table-responsive" id="statuses-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($statuses as $status)
        <tr>
            <td>{!! $status->name !!}</td>
            <td>
                {!! Form::open(['route' => ['statuses.destroy', $status->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('statuses.show', [$status->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('statuses.edit', [$status->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>