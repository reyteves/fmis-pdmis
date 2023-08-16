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

    @if (Auth::user()->role_id === 3)
    <p>
        {{-- <a href="{{ route('admin.folders.create') }}" class="btn btn-success">Add New Project</a> --}}
        {{-- <a id="projectsFromSameRegionButton" class="btn btn-success">
            <i class="fa fa-plus"></i> &nbsp;Projects from the Same Region
        </a>

        <a id="projectsFromAllRegionButton" class="btn btn-success">
            <i class="fa fa-plus"></i> &nbsp;All Regions
        </a> --}}

        <button id="projectsFromSameRegionButton" class="btn btn-success">
            <i class="fa fa-plus"></i> &nbsp;Projects from the Same Region
        </button>
        
        <button id="projectsFromAllRegionButton" class="btn btn-success">
            <i class="fa fa-plus"></i> &nbsp;All Projects
        </button>
    </p>
    @endif

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

                {{-- <tbody>
                    @if (count($folders) > 0)
                        @foreach ($folders as $folder)
                            @if (Auth::user()->role_id === 3)
                                @if ($folder->site->region == auth()->user()->region)
                                    @include('admin.folders.index-table')
                                @endif
                            @else
                                @include('admin.folders.index-table')
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody> --}}

                <tbody>
                    @if (count($folders) > 0)
                        @foreach ($folders as $folder)
                            <div class="conditional-row1">
                                @if ($folder->site->region == auth()->user()->region)
                                    @include('admin.folders.index-table')
                                @endif
                            </div>
                
                            <div class="conditional-row2">
                                @include('admin.folders.index-table')
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
                

                {{-- <tbody>
                    @if (count($folders) > 0)
                    @foreach ($folders as $folder)
                        <tr class="project-item" data-region="{{ $folder->site->region }}">
                            @include('admin.folders.index-table')
                        </tr>
                    @endforeach
                    @endif
                </tbody> --}}
                

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

<script>
    // $(document).ready(function() {
    //     $('#projectsFromSameRegionButton').click(function() {
    //         console.log("projectsFromSameRegionButton");
    //     });

    //     $('#projectsFromAllRegionButton').click(function() {
    //         console.log("projectsFromAllRegionButton");
    //     });
    // });

    $(document).ready(function() {
        $('.conditional-row1').hide();  // Hide rows with class conditional-row1 initially
        $('.conditional-row2').hide();  // Hide rows with class conditional-row2 initially

        $('#projectsFromSameRegionButton').click(function() {
            console.log("projectsFromSameRegionButton");
            
            // Hide rows with class conditional-row2
            $('.conditional-row2').hide();
            
            // Show rows with class conditional-row1
            $('.conditional-row1').show();
        });

        $('#projectsFromAllRegionButton').click(function() {
            console.log("projectsFromAllRegionButton");
            
            // Hide rows with class conditional-row1
            $('.conditional-row1').hide();
            
            // Show rows with class conditional-row2
            $('.conditional-row2').show();
        });
    });
</script>





@endsection
