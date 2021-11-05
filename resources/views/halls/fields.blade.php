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

<!-- Audio Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_ru', 'Аудио на русском (необязательно):') !!}
    {!! Form::file('audio_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_kz', 'Аудио на казахском (необязательно)') !!}
    {!! Form::file('audio_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_en', 'Аудио на английском (необязательно):') !!}
    {!! Form::file('audio_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_de', 'Аудио на немецком (необязательно):') !!}
    {!! Form::file('audio_de', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio Fr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_fr', 'Аудио на французском (необязательно):') !!}
    {!! Form::file('audio_fr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio Es Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_es', 'Аудио на испанском (необязательно):') !!}
    {!! Form::file('audio_es', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Audio Tr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('audio_tr', 'Аудио на турецком (необязательно):') !!}
    {!! Form::file('audio_tr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_ru', 'Видео ссылка на русском (необязательно):') !!}
    {!! Form::text('video_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_kz', 'Видео ссылка на казахском (необязательно):') !!}
    {!! Form::text('video_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_en', 'Видео ссылка на английском (необязательно):') !!}
    {!! Form::text('video_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_de', 'Видео ссылка на немецком (необязательно):') !!}
    {!! Form::text('video_de', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video Fr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_fr', 'Видео ссылка на французском (необязательно):') !!}
    {!! Form::text('video_fr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video Es Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_es', 'Видео ссылка на испанском (необязательно):') !!}
    {!! Form::text('video_es', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Video Tr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_tr', 'Видео ссылка на турецком (необязательно):') !!}
    {!! Form::text('video_tr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>
