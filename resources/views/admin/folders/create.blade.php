@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.folders.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
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

                @if(Auth::user()->role_id !== 2)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#attachments_signatures">Attachments and Signatures</a>
                </li>
                @endif


                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#site">Project Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#budget">Budget Details</a>
                </li>

                @if(Auth::user()->role_id !== 2)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#evaluate">Evaluate</a>
                </li>
                @endif
            </ul>

         

            <div class="tab-content">
                <div class="tab-pane fade" id="details">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.details')
                    </div>
                </div>
                <div class="tab-pane fade" id="attachments_signatures">
                    <div class="tab-content">
                        <br>
                        @include('admin.folders.tab_create.attachments')
                        <br>
                        @include('admin.folders.tab_create.signatures')
                    </div>
                </div>
                <div class="tab-pane fade" id="site">
                    <div class="tab-content">
                        <br>
                        @include('admin.folders.tab_create.site')
                    </div>
                </div>
                <div class="tab-pane fade" id="budget">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.budget')
                    </div>
                </div>
                <div class="tab-pane fade" id="evaluate">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.evaluate')
                    </div>
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')

@endsection
