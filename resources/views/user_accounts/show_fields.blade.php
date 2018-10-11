<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userAccount->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $userAccount->user_id !!}</p>
</div>

<!-- Site Url Field -->
<div class="form-group">
    {!! Form::label('site_url', 'Site Url:') !!}
    <p>{!! $userAccount->site_url !!}</p>
</div>

<!-- Api Key Field -->
<div class="form-group">
    {!! Form::label('api_key', 'Api Key:') !!}
    <p>{!! $userAccount->api_key !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userAccount->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userAccount->updated_at !!}</p>
</div>

