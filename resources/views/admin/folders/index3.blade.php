@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>
    @can('folder_create')
        <p>

            {{-- <a href="{{ route('admin.folders.create') }}" class="btn btn-success">Add New Project</a> --}}

            <a href="{{ route('admin.folders.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> &nbsp;Add New Project
            </a>


        </p>
    @endcan

    @can('folder_delete')
        <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.folders.index') }}"
                    style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li>
            |
            <li><a href="{{ route('admin.folders.index') }}?show_deleted=1"
                    style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
        </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table id="myTable"
                class="table table-bordered table-striped {{ count($folders) > 0 ? 'datatable' : '' }} @can('folder_delete') @if (request('show_deleted') != 1) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('folder_delete')
                            @if (request('show_deleted') != 1)
                                <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                            @endif
                        @endcan

                        <th>@lang('quickadmin.folders.fields.name')</th>
                        @if (request('show_deleted') == 1)
                            <th>&nbsp;</th>
                        @else
                            <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @if (count($folders) > 0)
                        @foreach ($folders as $folder)
 
                        @if ($folder->site->region == auth()->user()->region) 
        
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

                                        
                                        {{-- @can('folder_delete')
                                            {!! Form::open([
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('" . trans('quickadmin.qa_are_you_sure') . "');",
                                                'route' => ['admin.folders.destroy', $folder->id],
                                            ]) !!}
                                            {!! Form::submit('<i class="fa fa-pencil"></i> '.trans('quickadmin.qa_delete'), ['class' => 'btn btn-xs btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                        
                                        {{-- <tbody>
                                            @if (count($folders) > 0)
                                                @foreach ($folders as $folder)
                                                    @if ($folder->region == auth()->user()->region) <!-- Check if folder region matches user region -->
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
                                                            <!-- ... rest of your code ... -->
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </tbody> --}}
                                        

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
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody> 

            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('folder_delete')
            @if (request('show_deleted') != 1)
                window.route_mass_crud_entries_destroy =
                    '{{ route('admin.folders.mass_destroy') }}';
            @endif
        @endcan
    </script>
@endsection
