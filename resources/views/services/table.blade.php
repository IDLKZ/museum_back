<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
        <tr>
            <th>Изображение</th>
        <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
        <th>Наименование на немецком</th>
        <th>Наименование на французском</th>
        <th>Наименование на испанском</th>
        <th>Наименование на турецком</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->image }}</td>
            <td>{{ $service->title_ru }}</td>
            <td>{{ $service->title_kz }}</td>
            <td>{{ $service->title_en }}</td>
            <td>{{ $service->title_de }}</td>
            <td>{{ $service->title_fr }}</td>
            <td>{{ $service->title_es }}</td>
            <td>{{ $service->title_tr }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$service->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$service->id]) }}"
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
