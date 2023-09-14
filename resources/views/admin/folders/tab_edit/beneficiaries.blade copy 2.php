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

{{-- beneficiaries --}}
{{-- <table style="width: 4.8e+2pt; border-collapse: collapse; border: none;">
    <tbody>
        <tr>
            <td style="width: 82.8pt; border: none; padding: 0cm 5.4pt; height: 11.05pt; vertical-align: top;"
                rowspan="2">
                <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                    <strong><span style="font-family: 'Times New Roman',serif; color: black;">Estimated Numvbers of
                            Partner Beneficiaries per IP Group</span></strong></p>
            </td>
            <td style="width: 14.15pt; border: none; padding: 0cm 5.4pt; height: 11.05pt; vertical-align: top;">
                <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                    <strong><span style="font-family: 'Times New Roman',serif; color: black;">:</span></strong></p>
            </td>
            <td style="width: 177.2pt; border: none; padding: 0cm 5.4pt; height: 11.05pt; vertical-align: top;">
                <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                    <strong><em><span
                                style="font-family: 'Times New Roman',serif; color: black;">Beneficiaries:</span></em></strong>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 14.15pt; border: none; padding: .75pt .75pt .75pt .75pt; height: 16.5pt;">&nbsp;</td>
            <td style="width: 177.2pt; border: none; padding: 0cm 5.4pt; height: 16.5pt; vertical-align: top;">
                <table
                    style="float: left; width: 170pt; border: none; border-collapse: collapse; margin-left: 6.75pt; margin-right: 6.75pt; height: 126px;">
                    <tbody>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <strong><span
                                            style="font-size: 12px; font-family: 'Times New Roman',serif; color: #7030a0;">Beneficiaries</span></strong>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: center; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <strong><span
                                            style="font-size: 12px; font-family: 'Times New Roman',serif; color: #7030a0;">Total</span></strong>
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: center; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <strong><span
                                            style="font-size: 12px; font-family: 'Times New Roman',serif; color: #7030a0;">Male</span></strong>
                                </p>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: center; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <strong><span
                                            style="font-size: 12px; font-family: 'Times New Roman',serif; color: #7030a0;">Female</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">IP
                                        Group</span></p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    {!! Form::text('ip_group_total', old('ip_group_total',$folder->beneficiaries->ip_group_total), ['class' => 'form-control']) !!}
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <span
                                    style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{!! Form::text('ip_group_male', old('ip_group_male', $folder->beneficiaries->ip_group_male), ['class' => 'form-control']) !!}</span>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <span
                                    style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{!! Form::text('ip_group_female', old('ip_group_female', $folder->beneficiaries->ip_group_female), ['class' => 'form-control']) !!}</span>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">PWD</span>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <span
                                    style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{!! Form::text('pwd_total', old('pwd_total', $folder->beneficiaries->pwd_total), ['class' => 'form-control']) !!}</span>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <span
                                    style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{!! Form::text('pwd_male', old('pwd_male', $folder->beneficiaries->pwd_male), ['class' => 'form-control']) !!}</span>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <span
                                    style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{!! Form::text('pwd_female', old('pwd_female', $folder->beneficiaries->pwd_female), ['class' => 'form-control']) !!}</span>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">Children</span>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('children_total', old('children_total', $folder->beneficiaries->children_total), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('children_male', old('children_male', $folder->beneficiaries->children_male), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('children_female', old('children_female', $folder->beneficiaries->children_female), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">Youth</span>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('youth_total', old('youth_total', $folder->beneficiaries->youth_total), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('youth_male', old('youth_male', $folder->beneficiaries->youth_male), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('youth_female', old('youth_female', $folder->beneficiaries->youth_female), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">Adult</span>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('adult_total', old('adult_total', $folder->beneficiaries->adult_total), ['class' => 'form-control']) !!}/span>
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('adult_male', old('adult_male', $folder->beneficiaries->adult_male), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('adult_female', old('adult_female', $folder->beneficiaries->adult_female), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                        </tr>
                        <tr style="height: 18px;">
                            <td
                                style="width: 69.0312px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">Older</span>
                                </p>
                            </td>
                            <td
                                style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('older_total', old('older_total', $folder->beneficiaries->older_total), ['class' => 'form-control']) !!}/span>
                                </p>
                            </td>
                            <td
                                style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('older_male', old('older_male', $folder->beneficiaries->older_male), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                            <td
                                style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                <p
                                    style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                    <span
                                        style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{!! Form::text('older_female', old('older_female', $folder->beneficiaries->older_female), ['class' => 'form-control']) !!}</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                                        style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;"><span
                        style="font-family: 'Times New Roman',serif;">&nbsp;</span></p>
            </td>
        </tr>
    </tbody>
</table> --}}


{{-- /end beneficiaries --}}