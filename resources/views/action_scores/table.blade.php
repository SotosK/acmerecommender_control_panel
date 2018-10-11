<table class="table table-responsive" id="actionScores-table">
    <thead>
        <tr>
            <th>User Account Id</th>
        <th>Action</th>
        <th>Value</th>
        <th>Policy</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actionScores as $actionScore)
        <tr>
            <td>{!! $actionScore->user_account_id !!}</td>
            <td>{!! $actionScore->action !!}</td>
            <td>{!! $actionScore->value !!}</td>
            <td>{!! $actionScore->policy !!}</td>
            <td>
                {!! Form::open(['route' => ['actionScores.destroy', $actionScore->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actionScores.show', [$actionScore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actionScores.edit', [$actionScore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>