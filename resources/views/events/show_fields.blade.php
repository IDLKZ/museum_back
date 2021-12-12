<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $event->getFile("image") }}" width="200px"/>
</div>

<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    <p>{{ $event->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Заголовок на казахском:') !!}
    <p>{{ $event->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Заголовок на английском:') !!}
    <p>{{ $event->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Заголовок на немецком:') !!}
    <p>{{ $event->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Заголовок на французском:') !!}
    <p>{{ $event->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Заголовок на испанском:') !!}
    <p>{{ $event->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Заголовок на турецком:') !!}
    <p>{{ $event->title_tr }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $event->description_ru }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $event->description_en }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $event->description_kz }}</p>
</div>

<!-- Description De Field -->
<div class="col-sm-12">
    {!! Form::label('description_de', 'Описание на немецком:') !!}
    <p>{{ $event->description_de }}</p>
</div>

<!-- Description Fr Field -->
<div class="col-sm-12">
    {!! Form::label('description_fr', 'Описание на французском:') !!}
    <p>{{ $event->description_fr }}</p>
</div>

<!-- Description Es Field -->
<div class="col-sm-12">
    {!! Form::label('description_es', 'Описание на испанском:') !!}
    <p>{{ $event->description_es }}</p>
</div>

<!-- Description Tr Field -->
<div class="col-sm-12">
    {!! Form::label('description_tr', 'Описание на турецком:') !!}
    <p>{{ $event->description_tr }}</p>
</div>
<!-- Date Start Field -->
<div class="col-sm-12">
    {!! Form::label('date_start', 'Дата начала:') !!}
    <p>{{ $event->date_start }}</p>
</div>

<!-- Date End Field -->
<div class="col-sm-12">
    {!! Form::label('date_end', 'Дата окончания:') !!}
    <p>{{ $event->date_end }}</p>
</div>

