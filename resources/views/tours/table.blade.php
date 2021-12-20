<div class="table-responsive">
    <table class="table" id="tours-table">
        <thead>
        <tr>
            <th>Зал</th>
        <th>Предыдущий тур</th>
        <th>Следующий тур</th>
            <th>Изображение</th>
            <th>Панорама</th>
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
        @foreach($tours as $tour)
            <tr>
                <td>{{ $tour->hall->title_ru }}</td>
            <td>{{$tour->prev_tour ? $tour->prevTour->title_ru : "-" }}</td>
            <td>{{ $tour->next_tour ? $tour->nextTour->title_ru : "-"}}</td>
            <td><img src="{{ $tour->getFile("image") }}"  style="max-width: 120px"> </td>
            <td><img src="{{ $tour->getFile("panorama") }}" style="max-width: 120px"> </td>
            <td>{{ $tour->title_ru }}</td>
            <td>{{ $tour->title_kz }}</td>
            <td>{{ $tour->title_en }}</td>
            <td>{{ $tour->title_de }}</td>
            <td>{{ $tour->title_fr }}</td>
            <td>{{ $tour->title_es }}</td>
            <td>{{ $tour->title_tr }}</td>
                <td>
                    @if($tour->audio_ru)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_ru") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($tour->audio_kz)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_kz") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>@if($tour->audio_en)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_en") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif</td>
                <td>
                    @if($tour->audio_de)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_de") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($tour->audio_fr)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_fr") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>

                <td>
                    @if($tour->audio_es)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_es") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($tour->audio_tr)
                        <audio
                            controls
                            src="{{ $tour->getFile("audio_tr") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
            <td>{{ $tour->video_ru }}</td>
            <td>{{ $tour->video_kz }}</td>
            <td>{{ $tour->video_en }}</td>
            <td>{{ $tour->video_de }}</td>
            <td>{{ $tour->video_fr }}</td>
            <td>{{ $tour->video_es }}</td>
            <td>{{ $tour->video_tr }}</td>
                <td width="120">

                    <div class='btn-group'>
                        {!! Form::open(['route' => ['qrcode'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$tour->id}}">
                        <input type="hidden" name="type" value="tour">
                        <button type="submit"
                                class='btn btn-success btn-xs'>
                            <i class="fas fa-qrcode"></i>
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('tours.show', [$tour->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tours.edit', [$tour->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['tours.destroy', $tour->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
