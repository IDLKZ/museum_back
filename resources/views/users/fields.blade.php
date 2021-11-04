<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'ФИО:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Пароль:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефон:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>
