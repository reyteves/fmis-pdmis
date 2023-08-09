<div class="row mb-3">

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('region-dropdown', 'Region', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::select('region', [], old('region', $folder->site->region), ['class' => 'form-control', 'id' => 'region-dropdown']) !!} --}}
        {!! Form::select('region', [], old('region', $folder->site->region), [
            'class' => 'form-control',
            'id' => 'region-dropdown',
        ]) !!}

    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('province', 'Province', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('province', old('province', $folder->site->province), ['class' => 'form-control']) !!} --}}
        {!! Form::select('province', [], old('province', $folder->site->province), [
            'class' => 'form-control',
            'id' => 'provinces-dropdown',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('municipality', 'Municipality', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('municipality', old('municipality', $folder->site->municipality), ['class' => 'form-control']) !!} --}}
        {!! Form::select('municipality', [], old('municipality', $folder->site->municipality), [
            'class' => 'form-control',
            'id' => 'municipalities-dropdown',
        ]) !!}
    </div>
</div>

<br>

<div class="row mb-3">

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('barangay', 'Barangay', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('barangay', old('barangay', $folder->site->barangay), ['class' => 'form-control']) !!} --}}
        {!! Form::select('barangay', [], old('barangay', $folder->site->barangay), [
            'class' => 'form-control',
            'id' => 'barangay-dropdown',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('congressional_district', 'Congressional District', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('congressional_district', old('congressional_district', $folder->site->congressional_district), [
            'class' => 'form-control',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('street_address', 'Number, Street or Sitio', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('street_address', old('street_address', $folder->site->street_address), [
            'class' => 'form-control',
        ]) !!}
    </div>
</div>

<br>

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('cadt_calt', 'CADT/CALT', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('cadt_calt', old('cadt_calt', $folder->site->cadt_calt), ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('ad_name', 'Name of AD', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('ad_name', old('ad_name', $folder->site->ad_name), ['class' => 'form-control']) !!}
    </div>
</div>





<script>
    $(document).ready(function() {

        // Fetch regions from the server and populate the region dropdown
        fetch('/get-regions-dropdown')
            .then(response => response.json())
            .then(data => {
                let dropdown = $('#region-dropdown');
                dropdown.empty();

                for (let code in data) {
                    let option = $('<option></option>');
                    option.val(code).text(data[code]);
                    dropdown.append(option);
                }

                // Set the initial value based on the selected option from the server-side
                let initialRegionCode = '{{ $folder->site->region }}';
                dropdown.val(initialRegionCode);

                // Trigger the change event manually to populate provinces initially
                dropdown.trigger('change');
            });


        // Event listener for region dropdown change
        $('#region-dropdown').on('change', function() {
            let selectedRegionId = $(this).val();
            let provincesDropdown = $(
                '#provinces-dropdown'
            ); // Replace 'provinces-dropdown' with the ID of your provinces dropdown

            // Fetch provinces based on the selected region
            $.ajax({
                url: "{{ route('getProvinces') }}",
                data: {
                    regionID: selectedRegionId // Use region code as the parameter
                },
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                success: function(data)

                {
                    provincesDropdown.empty();

                    let initialProvinceCode = '{{ $folder->site->province }}';
                    provincesDropdown.val(initialProvinceCode);

                    for (let province of data) {
                        let option = $('<option></option>');
                        option.val(province.code).text(province.name);
                        if (province.code === initialProvinceCode) {
                            option.prop('selected', true);
                        }
                        provincesDropdown.append(option);
                    }

                    // Trigger change event on provinces dropdown to populate cities dropdown
                    provincesDropdown.trigger('change');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            $('#provinces-dropdown').trigger('change');
        });

        /* To select cities/municipalities/sub-municipalities based on selected province */
        $('#provinces-dropdown').on('change', function() {
            let selectedProvinceId = $(this).val();
            let municipalitiesDropdown = $(
                '#municipalities-dropdown'
            ); // Replace 'municipalities-dropdown' with the ID of your municipalities dropdown
            let barangayDropdown = $('#barangay-dropdown');
            // Fetch municipalities based on the selected province
            $.ajax({
                url: "{{ route('getCities') }}",
                data: {
                    provinceID: selectedProvinceId // Use province code as the parameter
                },
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                success: function(data) {
                    municipalitiesDropdown.empty();
                    let initialMunicipalityCode = '{{ $folder->site->municipality }}';
                    municipalitiesDropdown.val(initialMunicipalityCode);
                    for (let municipality of data) {
                        let option = $('<option></option>');
                        option.val(municipality.code).text(municipality.name);
                        if (municipality.code === initialMunicipalityCode) {
                            option.prop('selected', true);
                        }
                        municipalitiesDropdown.append(option);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
            // Trigger change event on municipalities dropdown after page load
            $('#municipalities-dropdown').trigger('change');
        });
        /* To select barangays based on selected municipality */
        $('#municipalities-dropdown').on('change', function() {
            let selectedMunicipalityId = $(this).val();
            let barangayDropdown = $('#barangay-dropdown');
            // Fetch barangays based on the selected municipality
            $.ajax({
                url: "{{ route('getBrgy') }}", // Change to your route for fetching barangays
                data: {
                    cityID: selectedMunicipalityId
                },
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                success: function(data) {
                    barangayDropdown.empty();
                    let initialBarangayValue = '{{ $folder->site->barangay }}';
                    console.log("initialBarangayValue: " + initialBarangayValue);
                    barangayDropdown.val(initialBarangayValue);
                    for (let barangay of data) {
                        let option = $('<option></option>');
                        option.val(barangay.code).text(barangay.name);
                        if (barangay.code === initialBarangayValue) {
                            option.prop('selected', true);
                        }
                        barangayDropdown.append(option);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("error: " + error);
                }
            });
            $('#barangay-dropdown').trigger('change');
        });
        //  /end of document ready
    });
</script>
