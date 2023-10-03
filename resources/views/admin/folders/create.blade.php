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
                    <a class="nav-link" data-toggle="tab" href="#details"><i class="fa fa-pencil"></i>&nbsp;Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#site"><i class="fa fa-pencil"></i>&nbsp;Project Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#budget"><i class="fa fa-pencil"></i>&nbsp;Budget
                        Details</a>
                </li>

                @if (Auth::user()->role_id !== 2)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#attachments_signatures"><i
                                class="fa fa-check"></i>&nbsp;Attachments and Signatures</a>
                    </li>
                @endif

                @if (Auth::user()->role_id !== 2)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#evaluate"><i class="fa fa-check"></i>&nbsp;Evaluate</a>
                    </li>
                @endif


                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#beneficiaries"><i
                            class="fa fa-eye"></i>&nbsp;Beneficiaries</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#stakeholders"><i
                            class="fa fa-eye"></i>&nbsp;Stakeholders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#proponents"><i
                            class="fa fa-eye"></i>&nbsp;Proponents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#implementers"><i
                            class="fa fa-eye"></i>&nbsp;Implementers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#gantt"><i
                            class="fa fa-eye"></i>&nbsp;Gantt Chart</a>
                </li>
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

                <div class="tab-pane fade" id="beneficiaries">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.beneficiaries')
                    </div>
                </div>

                <div class="tab-pane fade" id="stakeholders">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.stakeholders')
                    </div>
                </div>

                <div class="tab-pane fade" id="proponents">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.proponents')
                    </div>
                </div>

                <div class="tab-pane fade" id="implementers">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.implementers')
                    </div>
                </div>
                <div class="tab-pane fade" id="gantt">
                    <div class="tab-content">
                        @include('admin.folders.tab_create.gantt')
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
