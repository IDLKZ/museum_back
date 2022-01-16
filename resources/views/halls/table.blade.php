<div class="table-responsive">
    <table class="table" id="halls-table">
        <thead>
        <tr>
            <th>Изображение</th>
            <th>Наименование на русском</th>
{{--            <th>Наименование на казахском</th>--}}
{{--            <th>Наименование на английском</th>--}}
{{--            <th>Наименование на немецком</th>--}}
{{--            <th>Наименование на французском</th>--}}
{{--            <th>Наименование на испанском</th>--}}
{{--            <th>Наименование на турецком</th>--}}
{{--            <th>Аудио на русском</th>--}}
{{--            <th>Аудио на казахском</th>--}}
{{--            <th>Аудио на английском</th>--}}
{{--            <th>Аудио на немецком</th>--}}
{{--            <th>Аудио на французском</th>--}}
{{--            <th>Аудио на испанском</th>--}}
{{--            <th>Аудио на турецком</th>--}}

            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($halls as $hall)
            <tr>
                <td>
                    <div style='width: 300px;height: 300px;background: url("{{ $hall->getFile("image") }}") no-repeat center; background-size: contain'></div>
{{--                    <img src="{{ $hall->getFile("image") }}" style="max-width: 200px">--}}
                </td>
                <td>{{ $hall->title_ru }}</td>
{{--                <td>{{ $hall->title_kz }}</td>--}}
{{--                <td>{{ $hall->title_en }}</td>--}}
{{--                <td>{{ $hall->title_de }}</td>--}}
{{--                <td>{{ $hall->title_fr }}</td>--}}
{{--                <td>{{ $hall->title_es }}</td>--}}
{{--                <td>{{ $hall->title_tr }}</td>--}}

{{--                <td>--}}
{{--                    @if($hall->audio_ru)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_ru") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($hall->audio_kz)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_kz") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>@if($hall->audio_en)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_en") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif</td>--}}
{{--                <td>--}}
{{--                    @if($hall->audio_de)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_de") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($hall->audio_fr)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_fr") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}

{{--                <td>--}}
{{--                    @if($hall->audio_es)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_es") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($hall->audio_tr)--}}
{{--                        <audio--}}
{{--                                controls--}}
{{--                                src="{{ $hall->getFile("audio_tr") }}">--}}
{{--                            Your browser does not support the--}}
{{--                            <code>audio</code> element.--}}
{{--                        </audio>--}}

{{--                    @endif--}}
{{--                </td>--}}
                <td width="120">

                    <div class='btn-group'>
                        {!! Form::open(['route' => ['qrcode'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$hall->id}}">
                        <input type="hidden" name="type" value="hall">
                        <button type="submit"
                                class='btn btn-success btn-xs'>
                            <i class="fas fa-qrcode"></i>
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('halls.show', [$hall->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('halls.edit', [$hall->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['halls.destroy', $hall->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                        {!! Form::close() !!}
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
