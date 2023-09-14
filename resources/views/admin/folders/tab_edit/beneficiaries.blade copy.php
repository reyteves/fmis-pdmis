<p>Test</p>

<style>
    #beneficiaries_table {
        width: 100%;
        font-family: "Arial", sans-serif;
        border-collapse: collapse;
    }

    #beneficiaries_table th,
    #beneficiaries_table td {
        border: 1px solid black;
        padding: 5px;
    }

    #beneficiaries_table th {
        font-size: 12px;
        color: #7030A0;
    }

    .text-center th {
        text-align: center;
    }
</style>

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
          

            <td style="width: 25.6868%;">
                {!! Form::text('ip_group_total', old('ip_group_total',$folder->beneficiaries->ip_group_total), ['class' => 'form-control']) !!}
            </td>
          
            <td style="width: 27.6099%;">
                {!! Form::text('ip_group_male', old('ip_group_male', $folder->beneficiaries->ip_group_male), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 30.4602%;">
                {!! Form::text('ip_group_female', old('ip_group_female', $folder->beneficiaries->ip_group_female), ['class' => 'form-control']) !!}
            </td>

        </tr>

        <tr class="text-center">
            <td style="width: 16.1058%;">PWD</td>
            <td style="width: 25.6868%;">
                {!! Form::text('pwd_total', old('pwd_total', $folder->beneficiaries->pwd_total), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 27.6099%;">
                {!! Form::text('pwd_male', old('pwd_male', $folder->beneficiaries->pwd_male), ['class' => 'form-control']) !!}
            </td>
            <td style="width: 30.4602%;">
                {!! Form::text('pwd_female', old('pwd_female', $folder->beneficiaries->pwd_female), ['class' => 'form-control']) !!}
            </td>
        </tr>

        <tr class="text-center">
            <td style="width: 16.1058%;">Children</td>
          
            <td style="width: 25.6868%;">
                {!! Form::text('children_total', old('children_total', $folder->beneficiaries->children_total), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 27.6099%;">
                {!! Form::text('children_male', old('children_male', $folder->beneficiaries->children_male), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 30.4602%;">
                {!! Form::text('children_female', old('children_female', $folder->beneficiaries->children_female), ['class' => 'form-control']) !!}
            </td>
        </tr>

        <tr class="text-center">
            <td style="width: 16.1058%;">Youth</td>
          

            <td style="width: 25.6868%;">
                {!! Form::text('youth_total', old('youth_total', $folder->beneficiaries->youth_total), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 27.6099%;">
                {!! Form::text('youth_male', old('youth_male', $folder->beneficiaries->youth_male), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 30.4602%;">
                {!! Form::text('youth_female', old('youth_female', $folder->beneficiaries->youth_female), ['class' => 'form-control']) !!}
            </td>
        </tr>

        <tr class="text-center">
            <td style="width: 16.1058%;">Adult</td>
           

            <td style="width: 25.6868%;">
                {!! Form::text('adult_total', old('adult_total', $folder->beneficiaries->adult_total), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 27.6099%;">
                {!! Form::text('adult_male', old('adult_male', $folder->beneficiaries->adult_male), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 30.4602%;">
                {!! Form::text('adult_female', old('adult_female', $folder->beneficiaries->adult_female), ['class' => 'form-control']) !!}
            </td>
            
        </tr>

        <tr class="text-center">
            <td style="width: 16.1058%;">Older</td>
          

            <td style="width: 25.6868%;">
                {!! Form::text('older_total', old('older_total', $folder->beneficiaries->older_total), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 27.6099%;">
                {!! Form::text('older_male', old('older_male', $folder->beneficiaries->older_male), ['class' => 'form-control']) !!}
            </td>
            
            <td style="width: 30.4602%;">
                {!! Form::text('older_female', old('older_female', $folder->beneficiaries->older_female), ['class' => 'form-control']) !!}
            </td>
        </tr>

    </tbody>
</table>