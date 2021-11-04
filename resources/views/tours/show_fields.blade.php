<!-- Hall Id Field -->
<div class="col-sm-12">
    {!! Form::label('hall_id', 'Зал:') !!}
    <p>{{ $tour->hall->title_ru }}</p>
</div>

<!-- Prev Tour Field -->
<div class="col-sm-12">
    {!! Form::label('prev_tour', 'Предыдущий тур:') !!}
    <p>{{ $tour->prev_tour }}</p>
</div>

<!-- Next Tour Field -->
<div class="col-sm-12">
    {!! Form::label('next_tour', 'Следующий тур:') !!}
    <p>{{ $tour->next_tour }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <hr>
    <img src="{{ $tour->getFile("image") }}" style="max-width: 320px">
    <hr>
</div>

<!-- Alias Field -->
<div class="col-sm-12">
    {!! Form::label('alias', 'Ссылка:') !!}
    <p>{{ $tour->alias }}</p>
</div>



<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $tour->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $tour->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $tour->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Наименование на немецком (необязательно):') !!}
    <p>{{ $tour->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Наименование на французском (необязательно):') !!}
    <p>{{ $tour->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Наименование на испанском (необязательно):') !!}
    <p>{{ $tour->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Наименование на турецком (необязательно):') !!}
    <p>{{ $tour->title_tr }}</p>
</div>


<!-- Audio Ru Field -->
<div class="col-sm-12">
    {!! Form::label('audio_ru', 'Аудио на русском (необязательно):') !!}
    @if($tour->audio_ru)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_ru") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Kz Field -->
<div class="col-sm-12">
    {!! Form::label('audio_kz', 'Аудио на казахском (необязательно):') !!}
    @if($tour->audio_kz)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_kz") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio En Field -->
<div class="col-sm-12">
    {!! Form::label('audio_en', 'Аудио на английском (необязательно):') !!}
    @if($tour->audio_en)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_en") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio De Field -->
<div class="col-sm-12">
    {!! Form::label('audio_de', 'Аудио на немецком (необязательно):') !!}
    @if($tour->audio_de)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_de") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Fr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_fr', 'Аудио на французском (необязательно):') !!}
    @if($tour->audio_fr)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_fr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Es Field -->
<div class="col-sm-12">
    {!! Form::label('audio_es', 'Аудио на испанском (необязательно):') !!}
    @if($tour->audio_es)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_es") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>

<!-- Audio Tr Field -->
<div class="col-sm-12">
    {!! Form::label('audio_tr', 'Аудио на турецком (необязательно):') !!}
    @if($tour->audio_tr)
        <hr><audio
            controls
            src="{{ $tour->getFile("audio_tr") }}">
            Your browser does not support the
            <code>audio</code> element.
        </audio><hr>

    @endif
</div>


<!-- Video Ru Field -->
<div class="col-sm-12">
    {!! Form::label('video_ru', 'Видео ссылка на русском (необязательно):') !!}
    <p>{{ $tour->video_ru }}</p>
</div>

<!-- Video Kz Field -->
<div class="col-sm-12">
    {!! Form::label('video_kz', 'Видео ссылка на казахском (необязательно):') !!}
    <p>{{ $tour->video_kz }}</p>
</div>

<!-- Video En Field -->
<div class="col-sm-12">
    {!! Form::label('video_en', 'Видео ссылка на английском (необязательно):') !!}
    <p>{{ $tour->video_en }}</p>
</div>

<!-- Video De Field -->
<div class="col-sm-12">
    {!! Form::label('video_de', 'Видео ссылка на немецком (необязательно):') !!}
    <p>{{ $tour->video_de }}</p>
</div>

<!-- Video Fr Field -->
<div class="col-sm-12">
    {!! Form::label('video_fr', 'Видео ссылка на французском (необязательно):') !!}
    <p>{{ $tour->video_fr }}</p>
</div>

<!-- Video Es Field -->
<div class="col-sm-12">
    {!! Form::label('video_es', 'Видео ссылка на испанском (необязательно):') !!}
    <p>{{ $tour->video_es }}</p>
</div>

<!-- Video Tr Field -->
<div class="col-sm-12">
    {!! Form::label('video_tr', 'Видео ссылка на турецком (необязательно):') !!}
    <p>{{ $tour->video_tr }}</p>
</div>

