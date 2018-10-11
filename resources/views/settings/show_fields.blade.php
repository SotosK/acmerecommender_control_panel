<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $setting->id !!}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    <p>{!! $setting->user_account_id !!}</p>
</div>

<!-- Recommender Field -->
<div class="form-group">
    {!! Form::label('recommender', 'Recommender:') !!}
    <p>{!! $setting->recommender !!}</p>
</div>

<!-- Neighborhood Field -->
<div class="form-group">
    {!! Form::label('neighborhood', 'Neighborhood:') !!}
    <p>{!! $setting->neighborhood !!}</p>
</div>

<!-- Neighborhood Value Field -->
<div class="form-group">
    {!! Form::label('neighborhood_value', 'Neighborhood Value:') !!}
    <p>{!! $setting->neighborhood_value !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $setting->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $setting->updated_at !!}</p>
</div>

