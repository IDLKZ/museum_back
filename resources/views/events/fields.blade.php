@push("third_party_stylesheets")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Изображение:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Заголовок на казахском:') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Заголовок на английском:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_de', 'Заголовок на немецком (необязательно):') !!}
    {!! Form::text('title_de', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Fr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_fr', 'Заголовок на французском (необязательно):') !!}
    {!! Form::text('title_fr', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Es Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_es', 'Заголовок на испанском (необязательно):') !!}
    {!! Form::text('title_es', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Tr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_tr', 'Заголовок на турецком (необязательно):') !!}
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
    {!! Form::label('description_de', 'Описание на немецком(необязательно):') !!}
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


<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', 'Дата начала:') !!}
    {!! Form::text('date_start', null, ['class' => 'form-control date-start','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', 'Дата окончания:') !!}
    {!! Form::text('date_end', null, ['class' => 'form-control date-end','maxlength' => 255,'maxlength' => 255]) !!}
</div>

@push("page_scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ru.min.js" integrity="sha512-tPXUMumrKam4J6sFLWF/06wvl+Qyn27gMfmynldU730ZwqYkhT2dFUmttn2PuVoVRgzvzDicZ/KgOhWD+KAYQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script>
        $(".date-start").datetimepicker({
            format:'Y-m-d H:i'
        });
        $(".date-end").datetimepicker({
            format:'Y-m-d H:i'
        });
    </script>
    @endpush