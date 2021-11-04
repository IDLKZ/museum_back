<div class="table-responsive">
    <table class="table" id="tours-table">
        <thead>
        <tr>
            <th>Зал</th>
        <th>Предыдущий тур</th>
        <th>Следующий тур</th>
        <th>Image</th>
        <th>Alias</th>
        <th>Title Ru</th>
        <th>Title Kz</th>
        <th>Title En</th>
        <th>Title De</th>
        <th>Title Fr</th>
        <th>Title Es</th>
        <th>Title Tr</th>
            <th>Аудио на русском</th>
            <th>Аудио на казахском</th>
            <th>Аудио на английском</th>
            <th>Аудио на немецком</th>
            <th>Аудио на французском</th>
            <th>Аудио на испанском</th>
            <th>Аудио на турецком</th>
            <th>Видео ссылка на русском</th>
            <th>Видео ссылка на казахском</th>
            <th>Видео ссылка на английском</th>
            <th>Видео ссылка на немецком</th>
            <th>Видео ссылка на французском</th>
            <th>Видео ссылка на испанском</th>
            <th>Видео ссылка на турецком</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tours as $tour)
            <tr>
                <td>{{ $tour->hall_id }}</td>
            <td>{{ $tour->prev_tour }}</td>
            <td>{{ $tour->next_tour }}</td>
            <td>{{ $tour->image }}</td>
            <td>{{ $tour->alias }}</td>
            <td>{{ $tour->title_ru }}</td>
            <td>{{ $tour->title_kz }}</td>
            <td>{{ $tour->title_en }}</td>
            <td>{{ $tour->title_de }}</td>
            <td>{{ $tour->title_fr }}</td>
            <td>{{ $tour->title_es }}</td>
            <td>{{ $tour->title_tr }}</td>
            <td>{{ $tour->audio_ru }}</td>
            <td>{{ $tour->audio_kz }}</td>
            <td>{{ $tour->audio_en }}</td>
            <td>{{ $tour->audio_de }}</td>
            <td>{{ $tour->audio_fr }}</td>
            <td>{{ $tour->audio_es }}</td>
            <td>{{ $tour->audio_tr }}</td>
            <td>{{ $tour->video_ru }}</td>
            <td>{{ $tour->video_kz }}</td>
            <td>{{ $tour->video_en }}</td>
            <td>{{ $tour->video_de }}</td>
            <td>{{ $tour->video_fr }}</td>
            <td>{{ $tour->video_es }}</td>
            <td>{{ $tour->video_tr }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tours.destroy', $tour->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tours.show', [$tour->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tours.edit', [$tour->id]) }}"
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
