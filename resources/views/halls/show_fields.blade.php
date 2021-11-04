<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <hr>
    <img src="{{ $hall->getFile("image") }}" style="max-width: 320px">
</div>

<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $hall->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $hall->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $hall->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Наименование на немецком (необязательно):') !!}
    <p>{{ $hall->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Наименование на французском (необязательно):') !!}
    <p>{{ $hall->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Наименование на испанском (необязательно):') !!}
    <p>{{ $hall->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Наименование на турецком (необязательно):') !!}
    <p>{{ $hall->title_tr }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $hall->description_ru }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $hall->description_en }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $hall->description_kz }}</p>
</div>

<!-- Description De Field -->
<div class="col-sm-12">
    {!! Form::label('description_de', 'Описание на немецком (необязательно):') !!}
    <p>{{ $hall->description_de }}</p>
</div>

<!-- Description Fr Field -->
<div class="col-sm-12">
    {!! Form::label('description_fr', 'Описание на французском (необязательно):') !!}
    <p>{{ $hall->description_fr }}</p>
</div>

<!-- Description Es Field -->
<div class="col-sm-12">
    {!! Form::label('description_es', 'Описание на испанском (необязательно):') !!}
    <p>{{ $hall->description_es }}</p>
</div>

<!-- Description Tr Field -->
<div class="col-sm-12">
    {!! Form::label('description_tr', 'Описание на турецком (необязательно):') !!}
    <p>{{ $hall->description_tr }}</p>
</div>

<!-- Audio Ru Field -->
<div class="col-sm-12">
    {!! Form::label('audio_ru', 'Аудио на русском (необязательно):') !!}
    @if($hall->audio_ru)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_ru") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Kz Field -->
<div class="col-sm-12">
    {!! Form::label('audio_kz', 'Аудио на казахском (необязательно):') !!}
    @if($hall->audio_kz)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_kz") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio En Field -->
<div class="col-sm-12">
    {!! Form::label('audio_en', 'Аудио на английском (необязательно):') !!}
    @if($hall->audio_en)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_en") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio De Field -->
<div class="col-sm-12">
    {!! Form::label('audio_de', 'Аудио на немецком (необязательно):') !!}
    @if($hall->audio_de)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_de") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Fr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_fr', 'Аудио на французском (необязательно):') !!}
    @if($hall->audio_fr)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_fr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Es Field -->
<div class="col-sm-12">
    {!! Form::label('audio_es', 'Аудио на испанском (необязательно):') !!}
    @if($hall->audio_es)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_es") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Tr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_tr', 'Аудио на турецком (необязательно):') !!}
    @if($hall->audio_tr)
        <hr><audio
            controls
            src="{{ $hall->getFile("audio_tr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Video Ru Field -->
<div class="col-sm-12">
    {!! Form::label('video_ru', 'Видео ссылка на русском (необязательно):') !!}
    <p>{{ $hall->video_ru }}</p>
</div>

<!-- Video Kz Field -->
<div class="col-sm-12">
    {!! Form::label('video_kz', 'Видео ссылка на казахском (необязательно):') !!}
    <p>{{ $hall->video_kz }}</p>
</div>

<!-- Video En Field -->
<div class="col-sm-12">
    {!! Form::label('video_en', 'Видео ссылка на английском (необязательно):') !!}
    <p>{{ $hall->video_en }}</p>
</div>

<!-- Video De Field -->
<div class="col-sm-12">
    {!! Form::label('video_de', 'Видео ссылка на немецком (необязательно):') !!}
    <p>{{ $hall->video_de }}</p>
</div>

<!-- Video Fr Field -->
<div class="col-sm-12">
    {!! Form::label('video_fr', 'Видео ссылка на французском (необязательно):') !!}
    <p>{{ $hall->video_fr }}</p>
</div>

<!-- Video Es Field -->
<div class="col-sm-12">
    {!! Form::label('video_es', 'Видео ссылка на испанском (необязательно):') !!}
    <p>{{ $hall->video_es }}</p>
</div>

<!-- Video Tr Field -->
<div class="col-sm-12">
    {!! Form::label('video_tr', 'Видео ссылка на турецком (необязательно):') !!}
    <p>{{ $hall->video_tr }}</p>
</div>

