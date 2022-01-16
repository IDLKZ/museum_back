<div class="table-responsive">
    <table class="table" id="fAQS-table">
        <thead>
        <tr>
            <th>Вопрос на русском</th>
            <th>Вопрос на английском</th>
            <th>Вопрос на казахском</th>
{{--            <th>Вопрос на немецком</th>--}}
{{--            <th>Вопрос на французском</th>--}}
{{--            <th>Вопрос на испанском</th>--}}
{{--            <th>Вопрос на турецком</th>--}}
            <th>Ответ на русском</th>
            <th>Ответ на английском</th>
            <th>Ответ на казахском</th>
{{--            <th>Ответ на немецком(необязательно)</th>--}}
{{--            <th>Ответ на французском(необязательно)</th>--}}
{{--            <th>Ответ на испанском(необязательно)</th>--}}
{{--            <th>Ответ на турецком(необязательно)</th>--}}
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fAQS as $fAQ)
            <tr>
                <td>{{ $fAQ->question_ru }}</td>
                <td>{{ $fAQ->question_en }}</td>
                <td>{{ $fAQ->question_kz }}</td>
{{--                <td>{{ $fAQ->question_de }}</td>--}}
{{--                <td>{{ $fAQ->question_fr }}</td>--}}
{{--                <td>{{ $fAQ->question_es }}</td>--}}
{{--                <td>{{ $fAQ->question_tr }}</td>--}}
                <td>{{ Str::limit($fAQ->answer_ru, 150) }}</td>
                <td>{{ Str::limit($fAQ->answer_en, 150) }}</td>
                <td>{{ Str::limit($fAQ->answer_kz, 150) }}</td>
{{--                <td>{{ $fAQ->answer_de }}</td>--}}
{{--                <td>{{ $fAQ->answer_fr }}</td>--}}
{{--                <td>{{ $fAQ->answer_es }}</td>--}}
{{--                <td>{{ $fAQ->answer_tr }}</td>--}}
                <td width="120">
                    {!! Form::open(['route' => ['fAQS.destroy', $fAQ->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fAQS.show', [$fAQ->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('fAQS.edit', [$fAQ->id]) }}"
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
