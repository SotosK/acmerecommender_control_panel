<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    {!! Form::select('user_account_id', \Auth::user()->userAccounts()->pluck("site_url","id"), null, ['class' => 'form-control']) !!}
</div>

<!-- Recommender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recommender', 'Recommender:') !!}
    {!! Form::select('recommender',\App\Models\Recommender::all()->pluck("name","name"), null, ['class' => 'form-control', "id" => "recommender"]) !!}
</div>

<!-- Neighborhood Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neighborhood', 'Neighborhood:') !!}
    {!! Form::select('neighborhood', ['ThresholdUserNeighborhood'=>'ThresholdUserNeighborhood','NearestNUserNeighborhood'=>'NearestNUserNeighborhood'], null, ['class' => 'form-control',  "id"=>"neighborhood"]) !!}
</div>

<!-- Neighborhood Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neighborhood_value', 'Neighborhood Value:') !!}
    {!! Form::number('neighborhood_value', null, ['class' => 'form-control', "id"=>"neighborhood_value"]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('settings.index') !!}" class="btn btn-default">Cancel</a>
</div>
@section("scripts")
    <script>
        $(document).ready(function () {
            setFields($("#recommender").val());
        })
        $("#recommender").on("change", function(){
           setFields($(this).val());
        });

        $("#neighborhood").on("change", function(){
            setFields($("#recommender").val());
        });

        function setFields(recommender){
            if(recommender.indexOf("user") == -1){
                $("#neighborhood").prop("disabled",true);
                $("#neighborhood_value").prop("disabled",true);
            }else{
                $("#neighborhood").prop("disabled",false);
                $("#neighborhood_value").prop("disabled",false);
            }

            if($("#neighborhood").val()=='ThresholdUserNeighborhood'){
                $("#neighborhood_value").attr("placeholder","0.7").attr("min","0.1").attr("max","0.9").attr("step","0.01");
            }else{
                $("#neighborhood_value").attr("placeholder","300").attr("min","5").attr("max","1000").attr("step","1");
            }
        }
    </script>
@endsection