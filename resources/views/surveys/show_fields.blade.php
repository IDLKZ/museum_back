<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $survey->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $survey->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $survey->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Наименование на немецком:') !!}
    <p>{{ $survey->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Наименование на французском:') !!}
    <p>{{ $survey->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Наименование на испанском:') !!}
    <p>{{ $survey->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Наименование на турецком:') !!}
    <p>{{ $survey->title_tr }}</p>
</div>

<!-- Url Ru Field -->
<div class="col-sm-12">
    {!! Form::label('url_ru', 'Ссылка на русском:') !!}
    <a href="{{ $survey->url_ru }}" target="_blank">Гугл Форма на русском</a>
</div>

<!-- Url Kz Field -->
<div class="col-sm-12">
    {!! Form::label('url_kz', 'Ссылка на казахском:') !!}
    <a href="{{ $survey->url_kz }}" target="_blank">Гугл Форма на казахском</a>
</div>

<!-- Url En Field -->
<div class="col-sm-12">
    {!! Form::label('url_en', 'Ссылка на английском:') !!}
    <a href="{{ $survey->url_en }}" target="_blank">Гугл Форма на английском</a>
</div>

<!-- Url De Field -->
<div class="col-sm-12">
    {!! Form::label('url_de', 'Ссылка на немецком:') !!}
    <a href="{{ $survey->url_de }}" target="_blank">Гугл Форма на немецком</a>
</div>

<!-- Url Fr Field -->
<div class="col-sm-12">
    {!! Form::label('url_fr', 'Ссылка на французском:') !!}
    <a href="{{ $survey->url_fr }}" target="_blank">Гугл Форма на французском</a>
</div>

<!-- Url Es Field -->
<div class="col-sm-12">
    {!! Form::label('url_es', 'Ссылка на испанском:') !!}
    <a href="{{ $survey->url_es }}" target="_blank">Гугл Форма на испанском</a>
</div>

<!-- Url Tr Field -->
<div class="col-sm-12">
    {!! Form::label('url_tr', 'Ссылка на турецком:') !!}
    <a href="{{ $survey->url_tr }}" target="_blank">Гугл Форма на турецком</a>
</div>

