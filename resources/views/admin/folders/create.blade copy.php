@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.folders.store']]) !!}

    <div class="panel panel-default">
    {{-- <div> --}}
        <div class="panel-heading">

        {{-- <div> --}}
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
        {{-- <div> --}}
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.folders.fields.name') . ' Name* ', ['class' => 'control-label']) !!}
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
                    <a class="nav-link" data-toggle="tab" href="#site">Project Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#budget">Budget Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#evaluate">Evaluate</a>
                </li>

               

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="details">
                    @include('admin.folders.tab_create.details')
                </div>
                <div class="tab-pane fade" id="attachments_signatures">
                    <br>
                    @include('admin.folders.tab_create.attachments')
                    <br>
                    @include('admin.folders.tab_create.signatures')
                </div>
                <div class="tab-pane fade" id="site">
                    <br>
                    @include('admin.folders.tab_create.site')
                </div>
                <div class="tab-pane fade" id="budget">
                    @include('admin.folders.tab_create.budget')
                </div>
                <div class="tab-pane fade" id="evaluate">
                    @include('admin.folders.tab_create.evaluate')
                </div>

            
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

   
@stop

@section('javascript')

@endsection
