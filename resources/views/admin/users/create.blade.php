@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.users.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.users.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', trans('quickadmin.users.fields.password').'*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role_id', trans('quickadmin.users.fields.role').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role_id'))
                        <p class="help-block">
                            {{ $errors->first('role_id') }}
                        </p>
                    @endif
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('region', 'Region:', ['class' => 'control-label']) !!}
                    {!! Form::text('region', old('region'), ['class' => 'form-control', 'placeholder' => '', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('region'))
                        <p class="help-block">
                            {{ $errors->first('region') }}
                        </p>
                    @endif
                </div>
            </div> --}}

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('region', 'Region:', ['class' => 'control-label']) !!}
                    {!! Form::select('region', [], old('region'), ['id' =>'region-dropdown','class' => 'form-control select2', 'placeholder' => 'Select a region', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('region'))
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

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('office', 'Office', ['class' => 'control-label']) !!}
                    {!! Form::select('office', [], null, [
                        'id' => 'officeEvaluatorDropdown',
                        'class' => 'form-control',
                        'placeholder' => 'Select an office',
                        // No 'required' attribute in this case
                    ]) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('office'))
                        <p class="help-block">
                            {{ $errors->first('office') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
<script>
    $(document).ready(function() {
        console.log("test user region");
        // Fetch regions from the server and populate the region dropdown
        fetch('/get-regions-dropdown')
            .then(response => response.json())
            .then(data => {
                let dropdown = $('select[name="region"]');
                let sortedOptions = Object.keys(data).sort().map(code => {
                    return $('<option></option>').val(code).text(data[code]);
                });
                dropdown.empty().append(sortedOptions);
                
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

                        let initialProvinceCode = '';
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


            $.ajax({
             url: "{{ route('admin.offices.options') }}",
             method: "GET",
             dataType: "json",
             success: function (data) {
                 var dropdown = $('#officeEvaluatorDropdown');
                 dropdown.empty();
 
                 // Add the "Select Office" default option
                 dropdown.append($('<option></option>').attr('value', '').text('Select Office'));
 
                 // Loop through the data and populate the dropdown
                 $.each(data, function (_, value) {
                     var option = $('<option></option>').attr('value', value).text(value);
                     dropdown.append(option);
                 });
             }
         });
    })
</script>
@endsection



