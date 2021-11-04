<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Тип:') !!}
    {!! Form::select('type', [0=>"Новость",1=>"Акции"],null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Изображение:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>


<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_de', 'Наименование на немецком(необяз):') !!}
    {!! Form::text('title_de', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Fr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_fr', 'Наименование на французском(необяз):') !!}
    {!! Form::text('title_fr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Es Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_es', 'Наименование на испанском (необяз):') !!}
    {!! Form::text('title_es', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Tr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_tr', 'Наименование на турецком (необяз):') !!}
    {!! Form::text('title_tr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Description Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    {!! Form::textarea('description_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Description En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    {!! Form::textarea('description_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Description De Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_de', 'Описание на немецком (необязательно):') !!}
    {!! Form::textarea('description_de', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Fr Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_fr', 'Описание на французском (необязательно):') !!}
    {!! Form::textarea('description_fr', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Es Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_es', 'Описание на испанском (необязательно):') !!}
    {!! Form::textarea('description_es', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Tr Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_tr', 'Описание на турецком (необязательно):') !!}
    {!! Form::textarea('description_tr', null, ['class' => 'form-control']) !!}
</div>
