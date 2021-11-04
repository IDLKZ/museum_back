<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Hall Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hall_id', 'Hall Id:') !!}
    {!! Form::number('hall_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tour Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tour_id', 'Tour Id:') !!}
    {!! Form::number('tour_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_id', 'Model Id:') !!}
    {!! Form::number('model_id', null, ['class' => 'form-control']) !!}
</div>

<!-- News Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('news_id', 'News Id:') !!}
    {!! Form::number('news_id', null, ['class' => 'form-control']) !!}
</div>