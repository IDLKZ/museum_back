<!-- Question Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_ru', 'Вопрос на русском:') !!}
    {!! Form::text('question_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_en', 'Вопрос на английском:') !!}
    {!! Form::text('question_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_kz', 'Вопрос на казахском:') !!}
    {!! Form::text('question_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_de', 'Вопрос на немецком(необязательно):') !!}
    {!! Form::text('question_de', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question Fr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_fr', 'Вопрос на французском(необязательно):') !!}
    {!! Form::text('question_fr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question Es Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_es', 'Вопрос на испанском (необязательно):') !!}
    {!! Form::text('question_es', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Question Tr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_tr', 'Вопрос на турецком (необязтельно):') !!}
    {!! Form::text('question_tr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Answer Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_ru', 'Ответ на русском:') !!}
    {!! Form::textarea('answer_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_en', 'Ответ на английском:') !!}
    {!! Form::textarea('answer_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_kz', 'Ответ на казахском:') !!}
    {!! Form::textarea('answer_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer De Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_de', 'Ответ на немецком(необязательно):') !!}
    {!! Form::textarea('answer_de', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Fr Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_fr', 'Ответ на французском (необязательно):') !!}
    {!! Form::textarea('answer_fr', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Es Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_es', 'Ответ на испанском (необязательно):') !!}
    {!! Form::textarea('answer_es', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Tr Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_tr', 'Ответ на турецком (необязательно):') !!}
    {!! Form::textarea('answer_tr', null, ['class' => 'form-control']) !!}
</div>
