@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


@section('content')

    <style>
        .btn {
            transition: transform 0.5s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            border-radius: 10px !important;
            opacity: 0.8 !important;
            filter: brightness(1.2) !important;
            font-family: cursive, serif !important;
        }

        tr td:hover {
            font-weight: bolder !important;
            font-family: cursive, serif !important;
            transition: transform 0.1s ease;
        }

        .content-wrapper {
            /* background-image: url('public/images/background.PNG') !important; */
            background-image: url('public\images\app\NCIP_logo150x150.png') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
            /* Optionally, you can set a background color as a fallback */
            background-color: #f0f0f0 !important;
            /* Choose a suitable background color */
        }
    </style>

    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>
    @can('folder_create')
        <p>

            {{-- <a href="{{ route('admin.folders.create') }}" class="btn btn-success">Add New Project</a> --}}

            <a href="{{ route('admin.folders.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> &nbsp;Add New Project
            </a>

            {{-- @if (!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id) --}}
            {{-- @if (Session::get('Folder.filter', 'all') == 'my')
                    <a href="?filter=all" class="btn btn-default">Show all records</a>
                @else
                    <a href="?filter=my" class="btn btn-default">Filter my records</a>
                @endif --}}
            {{-- @endif --}}


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

    {{-- if user role is 3 --}}
    @if (Auth::user()->role_id === 3)
        <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.folders.index') }}" style="font-weight: 700">All Projects</a></li>
            |
            <li><a href="{{ route('admin.folders.index') }}?same_region=1" style="font-weight: 700">Projects In Your
                    Region</a></li>
            |
            <li><a href="{{ route('admin.folders.index') }}?same_province=1" style="font-weight: 700">Projects In Your
                    Province</a></li>
            |
            <li><a href="{{ route('admin.folders.index') }}?same_office=1" style="font-weight: 700">Projects For Evaluation
                    By Your Office</a></li>
        </ul>
        </p>
    @endif


    <div class="panel panel-default" style="background-image: url('{{ asset('images/background.PNG') }}') !important; background-size: cover !important;">
        <div class="panel-heading" style="background-image: url('{{ asset('images/background.PNG') }}') !important; background-size: cover !important;">
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
                            @include('admin.folders.index-table')
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
