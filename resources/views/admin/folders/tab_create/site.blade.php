<div class="row mb-3">

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('region', 'Region', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::select('region', [], null, [
            'class' => 'form-control',
            'placeholder' => 'Select Region',
            'id' => 'region-dropdown',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('province', 'Province', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('province', null, ['class' => 'form-control']) !!} --}}
        {!! Form::select('province', [], null, [
            'class' => 'form-control',
            'id' => 'provinces-dropdown',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('municipality', 'Municipality', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('municipality', null, ['class' => 'form-control']) !!} --}}
        {!! Form::select('municipality', [], null, [
            'class' => 'form-control',
            'id' => 'municipalities-dropdown',
        ]) !!}
    </div>




</div>

<br>

<div class="row mb-3">

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('barangay', 'Barangay', ['class' => 'col-form-label text-md-end']) !!}
        {{-- {!! Form::text('barangay', null, ['class' => 'form-control']) !!} --}}
        {!! Form::select('barangay', [], null, [
            'class' => 'form-control',
            'id' => 'barangay-dropdown',
        ]) !!}
    </div>

    <div class="col-md-4 col-lg-4 col-xl-4">
        {!! Form::label('congressional_district', 'Congressional District', ['class' => 'col-form-label text-md-end']) !!}
        {!! Form::text('congressional_district', null, ['class' => 'form-control']) !!}
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


@section('javascript')
    <script>
        // Use AJAX to fetch the regions data from the defined route
        // fetch('/get-regions-dropdown')
        //     .then(response => response.json())
        //     .then(data => {
        //         let dropdown = document.getElementById('region-dropdown');

        //         // Sort the data keys (region names) alphabetically
        //         let sortedRegionNames = Object.values(data).sort();

        //         // Loop through the sorted region names and add options to the dropdown
        //         for (let regionName of sortedRegionNames) {
        //             let option = document.createElement('option');
        //             option.value = regionName;
        //             option.text = regionName;
        //             dropdown.appendChild(option);
        //         }

        //         $('#regions-dropdown').trigger('change');
        //     });

        fetch('/get-regions-dropdown')
            .then(response => response.json())
            .then(data => {
                let dropdown = $('#region-dropdown');
                dropdown.empty();

                // Sort the data keys (codes) alphabetically
                let sortedCodes = Object.keys(data).sort();

                for (let code of sortedCodes) {
                    let option = $('<option></option>');
                    option.val(code).text(data[code]);
                    dropdown.append(option);
                }

                // Set the initial value based on the selected option from the server-side
                let initialRegionCode = ' ';
                dropdown.val(initialRegionCode);
                // Trigger the change event manually to populate provinces initially
                dropdown.trigger('change');
            });

        
        $('#region-dropdown').on('change', function() {
            let selectedRegionId = $(this).val();

            // console.log(selectedRegionId);

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

                    let initialProvinceCode = ' ';
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


        $('#provinces-dropdown').on('change', function() {
            let selectedProvinceId = $(this).val();
            let municipalitiesDropdown = $('#municipalities-dropdown');
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
                    let initialMunicipalityCode = ' ';
                    municipalitiesDropdown.val(initialMunicipalityCode);
                    for (let municipality of data) {
                        let option = $('<option></option>');
                        option.val(municipality.code).text(municipality.name);
                        if (municipality.code === initialMunicipalityCode) {
                            option.prop('selected', true);
                        }
                        municipalitiesDropdown.append(option);
                    }

                    // Fetch barangays based on the selected municipality
                    let selectedMunicipalityId = municipalitiesDropdown.val();
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
                            let initialBarangayValue =
                                ' ';
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
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>




<script>
    $(document).ready(function() {

        console.log("Test Javascript");
        // Get references to the input fields
        var totalCostInput = $('#total_project_cost');
        var directCostInput = $('#direct_cost');
        var indirectCostInput = $('#indirect_cost');

        // Function to update the total_project_cost field
        function updateTotalCost() {
            var directCost = parseFloat(directCostInput.val()) || 0;
            console.log("directCost): " + directCost);

            var indirectCost = parseFloat(indirectCostInput.val()) || 0;
            console.log("indirectCost: " + indirectCost);

            var totalCost = directCost + indirectCost;
            console.log("totalCost: " + totalCost);

            totalCostInput.val(totalCost.toFixed(2)); // Set the value with 2 decimal places
        }

        // Call the updateTotalCost function whenever either direct_cost or indirect_cost inputs change
        directCostInput.on('input', updateTotalCost);
        indirectCostInput.on('input', updateTotalCost);
    });
</script>
@endsection


