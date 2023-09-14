<!DOCTYPE html>
<html>
<head>
<style>
    #stakeholders_table {
        width: 100%;
        border-collapse: collapse;
    }

    #stakeholders_table th, #stakeholders_table td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    #stakeholders_table th {
        font-size: 12px;
        background-color: lightgray;
    }
</style>
</head>
<body>

<table id="stakeholders_table">
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
                {!! Form::text('stakeholder_name', old('stakeholder_name',$folder->stakeholders->stakeholder_name), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_office', old('stakeholder_office',$folder->stakeholders->stakeholder_office), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_address', old('stakeholder_address',$folder->stakeholders->stakeholder_address), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_number', old('stakeholder_number',$folder->stakeholders->stakeholder_number), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_name2', old('stakeholder_name2',$folder->stakeholders->stakeholder_name2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_office2', old('stakeholder_office2',$folder->stakeholders->stakeholder_office2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_address2', old('stakeholder_address2',$folder->stakeholders->stakeholder_address2), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_number2', old('stakeholder_number2',$folder->stakeholders->stakeholder_number2), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_name3', old('stakeholder_name3',$folder->stakeholders->stakeholder_name3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_office3', old('stakeholder_office3',$folder->stakeholders->stakeholder_office3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_address3', old('stakeholder_address3',$folder->stakeholders->stakeholder_address3), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_number3', old('stakeholder_number3',$folder->stakeholders->stakeholder_number3), ['class' => 'form-control']) !!}
            </td>
        </tr>
     
        <tr>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_name4', old('stakeholder_name4',$folder->stakeholders->stakeholder_name4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_office4', old('stakeholder_office4',$folder->stakeholders->stakeholder_office4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_address4', old('stakeholder_address4',$folder->stakeholders->stakeholder_address4), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 25.6868%;">
                {!! Form::text('stakeholder_number4', old('stakeholder_number4',$folder->stakeholders->stakeholder_number4), ['class' => 'form-control']) !!}
            </td>
        </tr>
     


    </tbody>
</table>

</body>
</html>
