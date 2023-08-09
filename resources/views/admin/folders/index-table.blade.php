<tr data-entry-id="{{ $folder->id }}">
    @can('folder_delete')
        @if (request('show_deleted') != 1)
            <td></td>
        @endif
    @endcan

    <td field-key='name'>
        @can('folder_view')
            <a href="{{ route('admin.folders.show', [$folder->id]) }}">{{ $folder->name }}</a>
        </td>
    @endcan
    @if (request('show_deleted') == 1)
        <td>
            @can('folder_delete')
                {!! Form::open([
                    'style' => 'display: inline-block;',
                    'method' => 'POST',
                    'onsubmit' => "return confirm('" . trans('quickadmin.qa_are_you_sure') . "');",
                    'route' => ['admin.folders.restore', $folder->id],
                ]) !!}
                {!! Form::submit(trans('quickadmin.qa_restore'), ['class' => 'btn btn-xs btn-success']) !!}
                {!! Form::close() !!}
            @endcan
            @can('folder_delete')
                {!! Form::open([
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('" . trans('quickadmin.qa_are_you_sure') . "');",
                    'route' => ['admin.folders.perma_del', $folder->id],
                ]) !!}
                {!! Form::submit(trans('quickadmin.qa_permadel'), ['class' => 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    @else
        <td>

            <a href="{{ route('admin.folders.view_ppf', [$folder->id]) }}"
                class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> &nbsp;View</a>
            @can('folder_edit')
                @if (Auth::user()->role_id === 3)
                    <a href="{{ route('admin.folders.edit', [$folder->id]) }}"
                        class="btn btn-xs btn-info"><i class="fa fa-check"></i>&nbsp;Evaluate</a>
                @else
                    <a href="{{ route('admin.folders.edit', [$folder->id]) }}"
                        class="btn btn-xs btn-info"><i
                            class="fa fa-pencil"></i>&nbsp;@lang('quickadmin.qa_edit')</a>
                @endif
            @endcan

            @can('folder_delete')
                {!! Form::open([
                    'style' => 'display: inline-block;',
                    'method' => 'DELETE',
                    'onsubmit' => "return confirm('" . trans('quickadmin.qa_are_you_sure') . "');",
                    'route' => ['admin.folders.destroy', $folder->id],
                ]) !!}
                {!! Form::button('<i class="fa fa-trash"></i> ' . trans('quickadmin.qa_delete'), [
                    'type' => 'submit',
                    'class' => 'btn btn-xs btn-danger',
                ]) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    @endif
</tr>