<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
        <tr>
            <th>Type</th>
            <th>Изображение</th>
            <th>Наименование на русском</th>
            <th>Наименование на казахском</th>
            <th>Наименование на английском</th>
            <th>Наименование на немецком</th>
            <th>Наименование на французском</th>
            <th>Наименование на испанском</th>
            <th>Наименование на турецком</th>
            <th>Описание на русском</th>
            <th>Описание на английском</th>
            <th>Описание на казахском</th>
            <th>Описание на немецком</th>
            <th>Описание на французском</th>
            <th>Описание на испанском</th>
            <th>Описание на турецком</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
                <td>{{ $news->type == 0 ? "Новость" : "Акция" }}</td>
            <td><img src="{{ $news->getFile("image") }}" style="max-width: 320px"></td>
            <td>{{ $news->title_ru }}</td>
            <td>{{ $news->title_kz }}</td>
            <td>{{ $news->title_en }}</td>
            <td>{{ $news->title_de }}</td>
            <td>{{ $news->title_fr }}</td>
            <td>{{ $news->title_es }}</td>
            <td>{{ $news->title_tr }}</td>
            <td>{{ $news->description_ru }}</td>
            <td>{{ $news->description_en }}</td>
            <td>{{ $news->description_kz }}</td>
            <td>{{ $news->description_de }}</td>
            <td>{{ $news->description_fr }}</td>
            <td>{{ $news->description_es }}</td>
            <td>{{ $news->description_tr }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('news.edit', [$news->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ВЫ уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
