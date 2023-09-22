<!DOCTYPE html>
<html>
<head>
<style>
    #implementers_table {
        width: 100%;
        border-collapse: collapse;
    }

    #implementers_table th, #implementers_table td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    #implementers_table th {
        font-size: 12px;
        background-color: lightgray;
    }

    #implementers_table input[type="text"] {
        /* width: 100%; */
        text-align: center;
    }
</style>
</head>
<body>

<table id="implementers_table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Office</th>
            <th>Address</th>
            <th>Contact Number</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_name', old('implementer_name',$folder->implementers->implementer_name), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_office', old('implementer_office',$folder->implementers->implementer_office), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_address', old('implementer_address',$folder->implementers->implementer_address), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_number', old('implementer_number',$folder->implementers->implementer_number), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_name2', old('implementer_name2',$folder->implementers->implementer_name2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_office2', old('implementer_office2',$folder->implementers->implementer_office2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_address2', old('implementer_address2',$folder->implementers->implementer_address2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_number2', old('implementer_number2',$folder->implementers->implementer_number2), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_name3', old('implementer_name3',$folder->implementers->implementer_name3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_office3', old('implementer_office3',$folder->implementers->implementer_office3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_address3', old('implementer_address3',$folder->implementers->implementer_address3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_number3', old('implementer_number3',$folder->implementers->implementer_number3), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_name4', old('implementer_name4',$folder->implementers->implementer_name4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_office4', old('implementer_office4',$folder->implementers->implementer_office4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_address4', old('implementer_address4',$folder->implementers->implementer_address4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('implementer_number4', old('implementer_number4',$folder->implementers->implementer_number4), ['class' => 'form-control']) !!}
            </td>
        </tr>
     


    </tbody>
</table>

</body>
</html>
