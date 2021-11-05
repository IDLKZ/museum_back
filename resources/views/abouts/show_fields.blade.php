<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $about->getFile("image") }}" width="120">
</div>

<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $about->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $about->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $about->title_en }}</p>
</div>

<!-- Title De Field -->
<div class="col-sm-12">
    {!! Form::label('title_de', 'Наименование на немецком (необязательно):') !!}
    <p>{{ $about->title_de }}</p>
</div>

<!-- Title Fr Field -->
<div class="col-sm-12">
    {!! Form::label('title_fr', 'Наименование на французском (необязательно):') !!}
    <p>{{ $about->title_fr }}</p>
</div>

<!-- Title Es Field -->
<div class="col-sm-12">
    {!! Form::label('title_es', 'Наименование на испанском (необязательно):') !!}
    <p>{{ $about->title_es }}</p>
</div>

<!-- Title Tr Field -->
<div class="col-sm-12">
    {!! Form::label('title_tr', 'Наименование на турецком (необязательно):') !!}
    <p>{{ $about->title_tr }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $about->description_ru }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $about->description_en }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $about->description_kz }}</p>
</div>

<!-- Description De Field -->
<div class="col-sm-12">
    {!! Form::label('description_de', 'Описание на немецком (необязательно):') !!}
    <p>{{ $about->description_de }}</p>
</div>

<!-- Description Fr Field -->
<div class="col-sm-12">
    {!! Form::label('description_fr', 'Описание на французском (необязательно):') !!}
    <p>{{ $about->description_fr }}</p>
</div>

<!-- Description Es Field -->
<div class="col-sm-12">
    {!! Form::label('description_es', 'Описание на испанском (необязательно):') !!}
    <p>{{ $about->description_es }}</p>
</div>

<!-- Description Tr Field -->
<div class="col-sm-12">
    {!! Form::label('description_tr', 'Описание на турецком (необязательно):') !!}
    <p>{{ $about->description_tr }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $about->status == 1 ? "Aктивная" : "Не активно"  }}</p>
</div>

