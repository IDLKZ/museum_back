<div class="table-responsive">
    <table class="table" id="showcases-table">
        <thead>
        <tr>
            <th>Зал</th>
            <th>Изображение</th>
            <th>Изображения текстуры</th>
            <th>Наименование на русском</th>
            <th>Наименование на казахском</th>
            <th>Наименование на английском</th>
            <th>Наименование на немецком</th>
            <th>Наименование на французском</th>
            <th>Наименование на испанском</th>
            <th>Наименование на турецком</th>
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
        @foreach($showcases as $showcase)
            <tr>
                <td>{{ $showcase->hall->title }}</td>
            <td><img src="{{ $showcase->getFile("image") }}" width="200px"></td>
            <td>{{ $showcase->alias }}</td>
            <td>{{ $showcase->title_ru }}</td>
            <td>{{ $showcase->title_kz }}</td>
            <td>{{ $showcase->title_en }}</td>
            <td>{{ $showcase->title_de }}</td>
            <td>{{ $showcase->title_fr }}</td>
            <td>{{ $showcase->title_es }}</td>
            <td>{{ $showcase->title_tr }}</td>
            <td>{{ $showcase->audio_ru }}</td>
            <td>{{ $showcase->audio_kz }}</td>
            <td>{{ $showcase->audio_en }}</td>
            <td>{{ $showcase->audio_de }}</td>
            <td>{{ $showcase->audio_fr }}</td>
            <td>{{ $showcase->audio_es }}</td>
            <td>{{ $showcase->audio_tr }}</td>
            <td>{{ $showcase->video_ru }}</td>
            <td>{{ $showcase->video_kz }}</td>
            <td>{{ $showcase->video_en }}</td>
            <td>{{ $showcase->video_de }}</td>
            <td>{{ $showcase->video_fr }}</td>
            <td>{{ $showcase->video_es }}</td>
            <td>{{ $showcase->video_tr }}</td>
                <td width="120">

                    <div class='btn-group'>
                        {!! Form::open(['route' => ['qrcode'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$showcase->id}}">
                        <input type="hidden" name="type" value="showCase">
                        <button type="submit"
                                class='btn btn-success btn-xs'>
                            <i class="fas fa-qrcode"></i>
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('showcases.show', [$showcase->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('showcases.edit', [$showcase->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['showcases.destroy', $showcase->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


