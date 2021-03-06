<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
        <tr>
            <th>Изображение</th>
            <th>Наименование на русском</th>
            <th>Наименование на казахском</th>
            <th>Наименование на английском</th>
            {{--            <th>Наименование на немецком</th>--}}
            {{--            <th>Наименование на французском</th>--}}
            {{--            <th>Наименование на испанском</th>--}}
            {{--            <th>Наименование на турецком</th>--}}


            <th>Статус</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>
                    <div style='width: 200px;height: 200px;background: url("{{ $about->getFile("image") }}") no-repeat center;background-size: contain'></div>
{{--                    <img src="{{ $about->getFile("image") }}" width="120">--}}
                </td>
                <td>{{ $about->title_ru }}</td>
                <td>{{ $about->title_kz }}</td>
                <td>{{ $about->title_en }}</td>
                {{--            <td>{{ $about->title_de }}</td>--}}
                {{--            <td>{{ $about->title_fr }}</td>--}}
                {{--            <td>{{ $about->title_es }}</td>--}}
                {{--            <td>{{ $about->title_tr }}</td>--}}

                <td>{{ $about->status == 1 ? "Aктивная" : "Не активно" }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}"
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
