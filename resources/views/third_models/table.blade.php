<div class="table-responsive">
    <table class="table" id="thirdModels-table">
        <thead>
        <tr>
            <th>Изображение</th>
            <th>Зал</th>
        <th>3д объект</th>
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
        @foreach($thirdModels as $thirdModel)
            <tr>
                <td><img src="{{ $thirdModel->getFile("image")}}" style="max-width: 320px"> </td>
                <td>{{ $thirdModel->hall->title_ru}} </td>
            <td>{{ $thirdModel->wavefront }}</td>
            <td>{{ $thirdModel->alias }}</td>
            <td>{{ $thirdModel->title_ru }}</td>
            <td>{{ $thirdModel->title_kz }}</td>
            <td>{{ $thirdModel->title_en }}</td>
            <td>{{ $thirdModel->title_de }}</td>
            <td>{{ $thirdModel->title_fr }}</td>
            <td>{{ $thirdModel->title_es }}</td>
            <td>{{ $thirdModel->title_tr }}</td>

                <td>
                    @if($thirdModel->audio_ru)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_ru") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($thirdModel->audio_kz)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_kz") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>@if($thirdModel->audio_en)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_en") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif</td>
                <td>
                    @if($thirdModel->audio_de)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_de") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($thirdModel->audio_fr)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_fr") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>

                <td>
                    @if($thirdModel->audio_es)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_es") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
                <td>
                    @if($thirdModel->audio_tr)
                        <audio
                            controls
                            src="{{ $thirdModel->getFile("audio_tr") }}">
                            Your browser does not support the
                            <code>audio</code> element.
                        </audio>

                    @endif
                </td>
            <td>{{ $thirdModel->video_ru }}</td>
            <td>{{ $thirdModel->video_kz }}</td>
            <td>{{ $thirdModel->video_en }}</td>
            <td>{{ $thirdModel->video_de }}</td>
            <td>{{ $thirdModel->video_fr }}</td>
            <td>{{ $thirdModel->video_es }}</td>
            <td>{{ $thirdModel->video_tr }}</td>
                <td width="120">

                    <div class='btn-group'>
                        {!! Form::open(['route' => ['qrcode'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$thirdModel->id}}">
                        <input type="hidden" name="type" value="thirdModel">
                        <button type="submit"
                                class='btn btn-success btn-xs'>
                            <i class="fas fa-qrcode"></i>
                        </button>
                        @if($thirdModel->wavefront)
                        {!! Form::close() !!}
                        <a href="{{ route('model3d',$thirdModel->alias) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-cube"></i>
                        </a>
                        @endif
                        <a href="{{ route('thirdModels.show', [$thirdModel->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('thirdModels.edit', [$thirdModel->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['thirdModels.destroy', $thirdModel->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
