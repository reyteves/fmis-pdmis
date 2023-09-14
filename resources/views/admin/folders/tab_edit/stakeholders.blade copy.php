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
            <td><input type="text" name="stakeholder_name2" value=""></td>
            <td><input type="text" name="stakeholder_office2" value=""></td>
            <td><input type="text" name="stakeholder_address2" value=""></td>
            <td><input type="text" name="stakeholder_number2" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="stakeholder_name3" value=""></td>
            <td><input type="text" name="stakeholder_office3" value=""></td>
            <td><input type="text" name="stakeholder_address3" value=""></td>
            <td><input type="text" name="stakeholder_number3" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="stakeholder_name4" value=""></td>
            <td><input type="text" name="stakeholder_office4" value=""></td>
            <td><input type="text" name="stakeholder_address4" value=""></td>
            <td><input type="text" name="stakeholder_number4" value=""></td>
        </tr>
    </tbody>
</table>

</body>
</html>
