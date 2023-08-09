<div class="row mb-3">


    {{-- <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('region', 'Region', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('region', null, ['class' => 'form-control']) !!}
    </div> --}}

    {{-- <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('region', 'Region', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::select('region', [], null, ['class' => 'form-control', 'placeholder' => 'Select Region', 'id' => 'region-dropdown']) !!}
    </div> --}}

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('region', 'Region', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::select('region', [], null, ['class' => 'form-control', 'placeholder' => 'Select Region', 'id' => 'region-dropdown']) !!}
    </div>


    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('congressional_district', 'Congressional District', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('congressional_district', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('province', 'Province', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('province', null, ['class' => 'form-control']) !!}
    </div>
</div>

<br>

<div class="row mb-3">
    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('municipality', 'Municipality', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('municipality', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('barangay', 'Barangay', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('barangay', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('street_address', 'Number, Street or Sitio', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('street_address', null, ['class' => 'form-control']) !!}
    </div>
</div>

<br>

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('cadt_calt', 'CADT/CALT', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('cadt_calt', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('ad_name', 'Name of AD', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('ad_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

{{-- <script>
    console.log('test dropdown');
    // Use AJAX to fetch the regions data from the defined route
    fetch('/get-regions-dropdown')
        .then(response => response.json())
        .then(data => {
            let dropdown = document.getElementById('region-dropdown');

            // Loop through the data and add options to the dropdown
            for (let code in data) {
                let option = document.createElement('option');
                option.value = code;
                option.text = data[code];
                dropdown.appendChild(option);
            }
        });
</script> --}}

<script>
    console.log('test dropdown');
    // Use AJAX to fetch the regions data from the defined route
    fetch('/get-regions-dropdown')
        .then(response => response.json())
        .then(data => {
            let dropdown = document.getElementById('region-dropdown');

            // Loop through the data and add options to the dropdown
            for (let code in data) {
                let option = document.createElement('option');
                option.value = data[code]; // Use region name as the option value
                option.text = data[code]; // Display the region name as the option text
                dropdown.appendChild(option);
            }
        });
</script>