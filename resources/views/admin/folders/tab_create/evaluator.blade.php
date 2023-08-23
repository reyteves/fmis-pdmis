
{{-- <p>For Evaluation by this Office:</p>  --}}
{{-- {!! Form::select('office_evaluator', [], $folder->evaluation->office_evaluator, ['id' => 'officeEvaluatorDropdown']) !!}
<script>
    // Fetch and populate the dropdown options using AJAX
    $(document).ready(function () {
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

                    // Check if the current value matches the saved value
                    if (value === "{{ $folder->evaluation->office_evaluator }}") {
                        option.attr('selected', 'selected');
                    }

                    dropdown.append(option);
                });
            }
        });
    });
</script>
 --}}

 <p>For Evaluation by this Office:</p>
 {!! Form::select('office_evaluator', [], null, ['class' => 'form-control','id' => 'officeEvaluatorDropdown']) !!}
 
 @section('javascript')
 <script>
     // Fetch and populate the dropdown options using AJAX
     $(document).ready(function () {
         $.ajax({
             url: "{{ route('admin.offices.options') }}",
             method: "GET",
             dataType: "json",
             success: function (data) {
                 console.log(data);
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
     });
 </script>
 @endsection
 

  {{-- <p>For Evaluation by this Office:</p>
{!! Form::select('office_evaluator2', [], null, ['class' => 'form-control', 'id' => 'officeEvaluatorDropdown2']) !!}

<button id="populateDropdownButton">Populate Dropdown</button>

@section('javascript')
<script>
    $(document).ready(function () {
        // Attach click event handler to the button
        $('#populateDropdownButton').on('click', function () {
            // Fetch and populate the dropdown options using AJAX
            $.ajax({
                url: "{{ route('admin.offices.options') }}",
                method: "GET",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var dropdown = $('#officeEvaluatorDropdown2');
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
        });
    });
</script>
@endsection --}}


 {{-- @section('javascript')
<script>
    // Fetch and populate the dropdown options using AJAX
    $(document).ready(function () {
        $.ajax({
            url: "{{ route('admin.offices.options') }}",
            method: "GET",
            dataType: "json",
            success: function (data) {
                console.log(data);
                console.log("test");
               
            }
        });
    });
</script>

@endsection --}}




