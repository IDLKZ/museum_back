<div class="table-responsive">
    <table class="table" id="events-table">
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
            <th>Дата начала</th>
            <th>Дата старта</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>
                    <div style='width: 200px;height: 200px;background: url("{{ $event->getFile("image") }}") no-repeat center;background-size: contain'></div>
{{--                    <img src="{{ $event->getFile("image") }}" width="200px"/>--}}
                </td>
                <td>{{ $event->title_ru }}</td>
                <td>{{ $event->title_kz }}</td>
                <td>{{ $event->title_en }}</td>
                {{--            <td>{{ $event->title_de }}</td>--}}
                {{--            <td>{{ $event->title_fr }}</td>--}}
                {{--            <td>{{ $event->title_es }}</td>--}}
                {{--            <td>{{ $event->title_tr }}</td>--}}
                <td>{{ $event->date_start }}</td>
                <td>{{ $event->date_end }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('events.show', [$event->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('events.edit', [$event->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
