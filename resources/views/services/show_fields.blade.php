<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $service->getFile("image") }}" width="200px"/>
</div>


<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    <p>{{ $service->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Заголовок на казахском:') !!}
    <p>{{ $service->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Заголовок на английском:') !!}
    <p>{{ $service->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Заголовок на немецком:') !!}
    <p>{{ $service->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Заголовок на французском:') !!}
    <p>{{ $service->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Заголовок на испанском:') !!}
    <p>{{ $service->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Заголовок на турецком:') !!}
    <p>{{ $service->title_tr }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $service->description_ru }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $service->description_en }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $service->description_kz }}</p>
</div>

<!-- Description De Field -->
<div class="col-sm-12">
    {!! Form::label('description_de', 'Описание на немецком:') !!}
    <p>{{ $service->description_de }}</p>
</div>

<!-- Description Fr Field -->
<div class="col-sm-12">
    {!! Form::label('description_fr', 'Описание на французском:') !!}
    <p>{{ $service->description_fr }}</p>
</div>

<!-- Description Es Field -->
<div class="col-sm-12">
    {!! Form::label('description_es', 'Описание на испанском:') !!}
    <p>{{ $service->description_es }}</p>
</div>

<!-- Description Tr Field -->
<div class="col-sm-12">
    {!! Form::label('description_tr', 'Описание на турецком:') !!}
    <p>{{ $service->description_tr }}</p>
</div>

<!-- Pricing Ru Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_ru', 'Оплата на русском:') !!}
    <p>{{ $service->pricing_ru }}</p>
</div>

<!-- Pricing En Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_en', 'Оплата на английском:') !!}
    <p>{{ $service->pricing_en }}</p>
</div>

<!-- Pricing Kz Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_kz', 'Оплата на казахском:') !!}
    <p>{{ $service->pricing_kz }}</p>
</div>

<!-- Pricing De Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_de', 'Оплата на немецком:') !!}
    <p>{{ $service->pricing_de }}</p>
</div>

<!-- Pricing Fr Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_fr', 'Оплата на французском:') !!}
    <p>{{ $service->pricing_fr }}</p>
</div>

<!-- Pricing Es Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_es', 'Оплата на испанском:') !!}
    <p>{{ $service->pricing_es }}</p>
</div>

<!-- Pricing Tr Field -->
<div class="col-sm-12">
    {!! Form::label('pricing_tr', 'Оплата на турецком:') !!}
    <p>{{ $service->pricing_tr }}</p>
</div>

