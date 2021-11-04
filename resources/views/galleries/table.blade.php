<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
        <tr>
            <th>Image</th>
        <th>Hall Id</th>
        <th>Tour Id</th>
        <th>Model Id</th>
        <th>News Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td>{{ $gallery->image }}</td>
            <td>{{ $gallery->hall_id }}</td>
            <td>{{ $gallery->tour_id }}</td>
            <td>{{ $gallery->model_id }}</td>
            <td>{{ $gallery->news_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galleries.show', [$gallery->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('galleries.edit', [$gallery->id]) }}"
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
