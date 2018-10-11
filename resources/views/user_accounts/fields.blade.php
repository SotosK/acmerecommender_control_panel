<!-- Site Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_url', 'Site Url:') !!}
    {!! Form::text('site_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userAccounts.index') !!}" class="btn btn-default">Cancel</a>
</div>
