<!DOCTYPE html>
<html>

<head>
    <title>Beneficiaries Table</title>
    <style>
        #beneficiaries_table {
            width: 100%;
            border-collapse: collapse;
        }

        #beneficiaries_table th,
        #beneficiaries_table td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        #beneficiaries_table th {
            font-size: 12px;
            background-color: lightgray;
        }

        .text-center th {
            text-align: center;
        }
    </style>
</head>

<body>
    <table id="beneficiaries_table">
        <thead class="text-center">
            <tr>
                <th style="width: 16.1058%;">Beneficiaries</th>
                <th style="width: 25.6868%;">Total</th>
                <th style="width: 27.6099%;">Male</th>
                <th style="width: 30.4602%;">Female</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td style="width: 16.1058%;">IP Group</td>
                <td style="width: 25.6868%;"><input type="number" name="ip_group_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="ip_group_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="ip_group_female" value=""></td>
            </tr>

            <tr class="text-center">
                <td style="width: 16.1058%;">PWD</td>
                <td style="width: 25.6868%;"><input type="number" name="pwd_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="pwd_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="pwd_female" value=""></td>
            </tr>

            <tr class="text-center">
                <td style="width: 16.1058%;">Children</td>
                <td style="width: 25.6868%;"><input type="number" name="children_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="children_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="children_female" value=""></td>
            </tr>

            <tr class="text-center">
                <td style="width: 16.1058%;">Youth</td>
                <td style="width: 25.6868%;"><input type="number" name="youth_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="youth_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="youth_female" value=""></td>
            </tr>

            <tr class="text-center">
                <td style="width: 16.1058%;">Adult</td>
                <td style="width: 25.6868%;"><input type="number" name="adult_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="adult_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="adult_female" value=""></td>
            </tr>

            <tr class="text-center">
                <td style="width: 16.1058%;">Older</td>
                <td style="width: 25.6868%;"><input type="number" name="older_total" value=""></td>
                <td style="width: 27.6099%;"><input type="number" name="older_male" value=""></td>
                <td style="width: 30.4602%;"><input type="number" name="older_female" value=""></td>
            </tr>

        </tbody>
    </table>
</body>

</html>
