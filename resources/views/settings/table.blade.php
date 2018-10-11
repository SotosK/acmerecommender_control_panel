<table class="table table-responsive" id="settings-table">
    <thead>
        <tr>
            <th>User Account Id</th>
        <th>Recommender</th>
        <th>Neighborhood</th>
        <th>Neighborhood Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($settings as $setting)
        <tr>
            <td>{!! $setting->user_account_id !!}</td>
            <td>{!! $setting->recommender !!}</td>
            <td>{!! $setting->neighborhood !!}</td>
            <td>{!! $setting->neighborhood_value !!}</td>
            <td>
                {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('settings.show', [$setting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('settings.edit', [$setting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>