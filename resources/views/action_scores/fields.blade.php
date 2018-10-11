<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    {!! Form::select('user_account_id',\Auth::user()->userAccounts()->pluck("site_url","id"), null, ['class' => 'form-control']) !!}
</div>

<!-- Action Field -->
<div class="form-group col-sm-6">
    {!! Form::label('action', 'Action:') !!}
    {!! Form::text('action', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Policy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('policy', 'Policy:') !!}
    {!! Form::select('policy', ["never"=>"never", "greatest" => "greatest", "updatePref"], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actionScores.index') !!}" class="btn btn-default">Cancel</a>
</div>
