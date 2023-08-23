
<p>For Evaluation by this Office:</p> 
{!! Form::select('office_evaluator', [], $folder->evaluation->office_evaluator, ['id' => 'officeEvaluatorDropdown']) !!}
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





