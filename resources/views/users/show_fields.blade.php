<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'ФИО:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>


<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Телефон:') !!}
    <p>{{ $user->phone }}</p>
</div>


