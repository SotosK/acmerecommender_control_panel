<table class="table table-responsive" id="userAccounts-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Site Url</th>
        <th>Api Key</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userAccounts as $userAccount)
        <tr>
            <td>{!! $userAccount->user_id !!}</td>
            <td>{!! $userAccount->site_url !!}</td>
            <td>{!! $userAccount->api_key !!}</td>
            <td>
                {!! Form::open(['route' => ['userAccounts.destroy', $userAccount->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userAccounts.show', [$userAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userAccounts.edit', [$userAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>