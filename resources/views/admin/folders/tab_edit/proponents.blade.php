<!DOCTYPE html>
<html>
<head>
<style>
    #proponents_table {
        width: 100%;
        border-collapse: collapse;
    }

    #proponents_table th, #proponents_table td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    #proponents_table th {
        font-size: 12px;
        background-color: lightgray;
    }

    #proponents_table input[type="text"] {
        /* width: 100%; */
        text-align: center;
    }
</style>
</head>
<body>

<table id="proponents_table">
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
                {!! Form::text('proponent_name', old('proponent_name',$folder->proponents->proponent_name), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_office', old('proponent_office',$folder->proponents->proponent_office), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_address', old('proponent_address',$folder->proponents->proponent_address), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_number', old('proponent_number',$folder->proponents->proponent_number), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_name2', old('proponent_name2',$folder->proponents->proponent_name2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_office2', old('proponent_office2',$folder->proponents->proponent_office2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_address2', old('proponent_address2',$folder->proponents->proponent_address2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_number2', old('proponent_number2',$folder->proponents->proponent_number2), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_name3', old('proponent_name3',$folder->proponents->proponent_name3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_office3', old('proponent_office3',$folder->proponents->proponent_office3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_address3', old('proponent_address3',$folder->proponents->proponent_address3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_number3', old('proponent_number3',$folder->proponents->proponent_number3), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_name4', old('proponent_name4',$folder->proponents->proponent_name4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_office4', old('proponent_office4',$folder->proponents->proponent_office4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_address4', old('proponent_address4',$folder->proponents->proponent_address4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('proponent_number4', old('proponent_number4',$folder->proponents->proponent_number4), ['class' => 'form-control']) !!}
            </td>
        </tr>
     


    </tbody>
</table>

</body>
</html>
