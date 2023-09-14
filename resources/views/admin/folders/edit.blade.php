@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>

    {!! Form::model($folder, ['method' => 'PUT', 'route' => ['admin.folders.update', $folder->id]]) !!}


    {{-- <div class="panel panel-default"> --}}
    <div class="panel panel-default">
        <div class="panel-heading">
            {{-- <div> --}}
            @lang('quickadmin.qa_edit')
        </div>

        {{-- <div class="panel-body"> --}}
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


                @if (Auth::user()->role_id !== 3)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#details"><i class="fa fa-pencil"></i>&nbsp;Details</a>
                    </li>
                @endif

                @if (Auth::user()->role_id !== 3)
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#site"><i
                                class="fa fa-pencil"></i>&nbsp;Project Site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#budget"><i class="fa fa-pencil"></i>&nbsp;Budget
                            Details</a>
                    </li>
                @endif

                @if (Auth::user()->role_id !== 2)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#attachments_signatures"><i
                                class="fa fa-check"></i>&nbsp;Status, Attachments and Signatures</a>
                    </li>
                @endif


                <li class="nav-item">
                    <a id="viewLink" class="nav-link" data-toggle="tab" href="#view"><i
                            class="fa fa-eye"></i>&nbsp;Print Project Details</a>
                </li>

                {{-- @if (Auth::user()->role_id !== 2) --}}
                    <li class="nav-item">
                        <a id="evaluateLink" class="nav-link" data-toggle="tab" href="#evaluate"><i
                                class="fa fa-check"></i>&nbsp;Evaluate</a>
                    </li>

                    <li class="nav-item">
                        <a id="evaluateLink" class="nav-link" data-toggle="tab" href="#evaluate-print"><i
                                class="fa fa-eye"></i>&nbsp;Print Evaluation Page</a>
                    </li>

                    <li class="nav-item">
                        <a id="evaluateLink" class="nav-link" data-toggle="tab" href="#evaluator"><i
                                class="fa fa-check"></i>&nbsp;Request Evaluation</a>
                    </li>


                    @if (Auth::user()->role_id !== 3)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#beneficiaries"><i
                                class="fa fa-check"></i>&nbsp;Beneficiaries</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#stakeholders"><i
                                class="fa fa-check"></i>&nbsp;Stakeholders</a>
                    </li>
                    @endif

                {{-- @endif --}}
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
                <div class="tab-pane fade" id="evaluate">
                    @include('admin.folders.tab_edit.evaluate')
                </div>
                <div class="tab-pane fade" id="evaluate-print">
                    @include('admin.folders.tab_edit.evaluation-page')
                </div>
                <div class="tab-pane fade" id="evaluator">
                    @include('admin.folders.tab_edit.evaluator')
                </div>
                <div class="tab-pane fade" id="beneficiaries">
                    @include('admin.folders.tab_edit.beneficiaries')
                </div>
                <div class="tab-pane fade" id="stakeholders">
                    @include('admin.folders.tab_edit.stakeholders')
                </div>

            </div>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-success', 'id' => 'updateButton']) !!}
    {!! Form::close() !!}
@stop


@section('javascript')
    <script>
        $(document).ready(function() {

            // Toggle visibility of the update button when a tab is clicked
            $('.nav-link').click(function() {
                var tabId = $(this).attr('href');
                if (tabId !== '#view') {
                    $('#updateButton').show();
                } else {
                    $('#updateButton').hide();
                }
            });
        });
    </script>
@endsection
