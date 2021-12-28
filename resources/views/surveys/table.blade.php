<div class="table-responsive">
    <table class="table" id="surveys-table">
        <thead>
        <tr>
        <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
        <th>Наименование на немецком</th>
        <th>Наименование на французском</th>
        <th>Наименование на испанском</th>
        <th>Наименование на турецком</th>
        <th>Гугл форма на русском</th>
        <th>Гугл форма на казахском</th>
        <th>Гугл форма на английском</th>
        <th>Гугл форма на немецком</th>
        <th>Гугл форма на французском</th>
        <th>Гугл форма на испанском</th>
        <th>Гугл форма на турецком</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($surveys as $survey)
            <tr>
            <td>{{ $survey->title_ru }}</td>
            <td>{{ $survey->title_kz }}</td>
            <td>{{ $survey->title_en }}</td>
            <td>{{ $survey->title_de }}</td>
            <td>{{ $survey->title_fr }}</td>
            <td>{{ $survey->title_es }}</td>
            <td>{{ $survey->title_tr }}</td>
            <td><a href="{{ $survey->url_ru }}" target="_blank">Гугл Форма на русском</a> </td>
            <td><a href="{{ $survey->url_kz }}" target="_blank">Гугл Форма на казахском</a></td>
            <td><a href="{{ $survey->url_en }}" target="_blank">Гугл Форма на английском</a></td>
            <td><a href="{{ $survey->url_de }}" target="_blank">Гугл Форма на немецком</a></td>
            <td><a href="{{ $survey->url_fr }}" target="_blank">Гугл Форма на французском</a></td>
            <td><a href="{{ $survey->url_es }}" target="_blank">Гугл Форма на испанском</a></td>
            <td><a href="{{ $survey->url_tr }}" target="_blank">Гугл Форма на турецком</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['surveys.destroy', $survey->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('surveys.show', [$survey->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('surveys.edit', [$survey->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
