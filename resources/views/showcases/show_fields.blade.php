<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображения:') !!}
    <hr>
    <img src="{{ $showcase->getFile("image")}}" style="max-width: 320px">
</div>
<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $showcase->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $showcase->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $showcase->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Наименование на немецком (необязательно):') !!}
    <p>{{ $showcase->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Наименование на французском (необязательно):') !!}
    <p>{{ $showcase->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Наименование на испанском (необязательно):') !!}
    <p>{{ $showcase->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Наименование на турецком (необязательно):') !!}
    <p>{{ $showcase->title_tr }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $showcase->description_ru }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $showcase->description_en }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $showcase->description_kz }}</p>
</div>

<!-- Description De Field -->
<div class="col-sm-12">
    {!! Form::label('description_de', 'Описание на немецком (необязательно):') !!}
    <p>{{ $showcase->description_de }}</p>
</div>

<!-- Description Fr Field -->
<div class="col-sm-12">
    {!! Form::label('description_fr', 'Описание на французском (необязательно):') !!}
    <p>{{ $showcase->description_fr }}</p>
</div>

<!-- Description Es Field -->
<div class="col-sm-12">
    {!! Form::label('description_es', 'Описание на испанском (необязательно):') !!}
    <p>{{ $showcase->description_es }}</p>
</div>

<!-- Description Tr Field -->
<div class="col-sm-12">
    {!! Form::label('description_tr', 'Описание на турецком (необязательно):') !!}
    <p>{{ $showcase->description_tr }}</p>
</div>

<!-- Audio Ru Field -->
<div class="col-sm-12">
    {!! Form::label('audio_ru', 'Аудио на русском (необязательно):') !!}
    @if($showcase->audio_ru)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_ru") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Kz Field -->
<div class="col-sm-12">
    {!! Form::label('audio_kz', 'Аудио на казахском (необязательно):') !!}
    @if($showcase->audio_kz)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_kz") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio En Field -->
<div class="col-sm-12">
    {!! Form::label('audio_en', 'Аудио на английском (необязательно):') !!}
    @if($showcase->audio_en)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_en") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio De Field -->
<div class="col-sm-12">
    {!! Form::label('audio_de', 'Аудио на немецком (необязательно):') !!}
    @if($showcase->audio_de)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_de") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Fr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_fr', 'Аудио на французском (необязательно):') !!}
    @if($showcase->audio_fr)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_fr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Es Field -->
<div class="col-sm-12">
    {!! Form::label('audio_es', 'Аудио на испанском (необязательно):') !!}
    @if($showcase->audio_es)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_es") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Tr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_tr', 'Аудио на турецком (необязательно):') !!}
    @if($showcase->audio_tr)
        <hr><audio
            controls
            src="{{ $showcase->getFile("audio_tr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>


<!-- Video Ru Field -->
<div class="col-sm-12">
    {!! Form::label('video_ru', 'Видео ссылка на русском (необязательно):') !!}
    <p>{{ $showcase->video_ru }}</p>
</div>

<!-- Video Kz Field -->
<div class="col-sm-12">
    {!! Form::label('video_kz', 'Видео ссылка на казахском (необязательно):') !!}
    <p>{{ $showcase->video_kz }}</p>
</div>

<!-- Video En Field -->
<div class="col-sm-12">
    {!! Form::label('video_en', 'Видео ссылка на английском (необязательно):') !!}
    <p>{{ $showcase->video_en }}</p>
</div>

<!-- Video De Field -->
<div class="col-sm-12">
    {!! Form::label('video_de', 'Видео ссылка на немецком (необязательно):') !!}
    <p>{{ $showcase->video_de }}</p>
</div>

<!-- Video Fr Field -->
<div class="col-sm-12">
    {!! Form::label('video_fr', 'Видео ссылка на французском (необязательно):') !!}
    <p>{{ $showcase->video_fr }}</p>
</div>

<!-- Video Es Field -->
<div class="col-sm-12">
    {!! Form::label('video_es', 'Видео ссылка на испанском (необязательно):') !!}
    <p>{{ $showcase->video_es }}</p>
</div>

<!-- Video Tr Field -->
<div class="col-sm-12">
    {!! Form::label('video_tr', 'Видео ссылка на турецком (необязательно):') !!}
    <p>{{ $showcase->video_tr }}</p>
</div>
