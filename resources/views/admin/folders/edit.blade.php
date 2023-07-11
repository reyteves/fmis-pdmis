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
                    <a class="nav-link active" data-toggle="tab" href="#site">Project Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#budget">Budget Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#view">View</a>
                </li>
                
               
            </ul>

            <div class="tab-content panel-body">
                <div class="tab-pane fade" id="details">
                    @include('admin.folders.tab_edit.details')
                </div>
                <div class="tab-pane fade" id="attachments_signatures">
                    <br>
                    @include('admin.folders.tab_edit.attachments')
                    <br>
                    @include('admin.folders.tab_edit.signatures')
                </div>
                <div class="tab-pane fade" id="site">
                    @include('admin.folders.tab_edit.site')
                </div>
                <div class="tab-pane fade" id="budget">
                    @include('admin.folders.tab_edit.budget')
                </div>
                <div class="tab-pane fade" id="view">
                    @include('admin.folders.tab_edit.view')
                </div>
              
            </div>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop
