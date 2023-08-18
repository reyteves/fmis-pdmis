@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.users.fields.name') . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.users.fields.email') . '*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', trans('quickadmin.users.fields.password') . '*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role_id', trans('quickadmin.users.fields.role') . '*', ['class' => 'control-label']) !!}
                    {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('role_id'))
                        <p class="help-block">
                            {{ $errors->first('role_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('region', 'Region*', ['class' => 'control-label']) !!}
                    {!! Form::select('region', [], old('region'), [
                        'id' => 'region-dropdown',
                        'class' => 'form-control select2',
                        'placeholder' => 'Select a region',
                        'required' => 'required',
                    ]) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('region'))
                        <p class="help-block">
                            {{ $errors->first('region') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('province', 'Province*', ['class' => 'control-label']) !!}
                    {!! Form::select('province', [], old('province'), [
                        'id' => 'provinces-dropdown',
                        'class' => 'form-control select2',
                        'placeholder' => 'Select a province',
                        'required' => 'required',
                    ]) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('province'))
                        <p class="help-block">
                            {{ $errors->first('province') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



@section('javascript')
    <script>
        $(document).ready(function() {
            // Fetch regions from the server and populate the region dropdown
            fetch('/get-regions-dropdown')
                .then(response => response.json())
                .then(data => {
                    let dropdown = $('#region-dropdown');
                    let sortedOptions = Object.keys(data).sort().map(code => {
                        return $('<option></option>').val(code).text(data[code]);
                    });
                    dropdown.empty().append(sortedOptions);

                    // Set the initial value based on the selected option from the server-side
                    let initialRegionCode = '{{ $user->region }}';
                    dropdown.val(initialRegionCode);
                    // Trigger the change event manually to handle select2 and other plugins
                    dropdown.trigger('change');
                });

            $('#region-dropdown').on('change', function() {
                let selectedRegionId = $(this).val();

                console.log(selectedRegionId);

                let provincesDropdown = $('#provinces-dropdown');

                $.ajax({
                    url: "{{ route('getProvinces') }}",
                    type: "GET",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        regionID: selectedRegionId
                    },
                    success: function(data) {
                        provincesDropdown.empty();

                        let initialProvinceCode = '{{ $user->province }}';
                        console.log("initialProvinceCode: " + initialProvinceCode);
                        provincesDropdown.val(initialProvinceCode);

                        for (let province of data) {
                            let option = $('<option></option>');
                            option.val(province.code).text(province.name);
                            if (province.code === initialProvinceCode) {
                                option.prop('selected', true);
                            }
                            provincesDropdown.append(option);
                        }

                        provincesDropdown.trigger('change');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });

                $('#provinces-dropdown').trigger('change');
            });




        })
    </script>
@endsection
