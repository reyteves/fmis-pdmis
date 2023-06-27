@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>

    {!! Form::model($folder, ['method' => 'PUT', 'route' => ['admin.folders.update', $folder->id]]) !!}


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.folders.fields.name') . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <ul class="nav nav-tabs text-lg bg-gray-100">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#details">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#attachments_signatures">Attachments and Signatures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#budget">Budget Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#name-site">Project Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#table-stakeholders">Stakeholders Addresses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#table-proponent">Proponents Addresses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#table-beneficiaries">Direct Beneficiaries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#table-beneficiaries2">Indirect Beneficiaries</a>
                </li>
            </ul>

            <div class="tab-content panel-body">
                <div class="tab-pane fade" id="details">
                    @include('admin.folders.tab_edit.details')
                </div>
                <div class="tab-pane fade" id="attachments_signatures">
                    @include('admin.folders.tab_edit.signatures')
                </div>
                <div class="tab-pane fade" id="budget">
                    {{-- @include('admin.folders.tab_create.details') --}}
                </div>
                <div class="tab-pane fade" id="name-site">
                    {{-- @include('partials._input_budget') --}}
                </div>
        
                <div class="tab-pane fade" id="table-stakeholders">
                    {{-- @include('partials._table_stakeholders') --}}
                </div>
                <div class="tab-pane fade" id="table-proponent">
                    {{-- @include('partials._table_proponent') --}}
                </div>
                <div class="tab-pane fade" id="table-beneficiaries">
                    {{-- @include('partials._table_direct_beneficiaries') --}}
                </div>
                <div class="tab-pane fade" id="table-beneficiaries2">
                    {{-- @include('partials._table_indirect_beneficiaries') --}}
                </div>
            </div>

           
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop
