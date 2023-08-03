<style>
    .custom-font-size tr td p span {
        font-size: 17px !important;
    }

    .input-container {
        display: flex;
        align-items: center;
        /* Vertically align the label and input box */
    }

    .input-container p {
        margin: 0;
        /* Remove default paragraph margin */
    }

    .input-container strong {
        margin-right: 10px;
        /* Add spacing between the label and input box */
    }

    .input-container textarea {
        flex: 1;
        /* Take up the remaining space in the row */
    }


    .header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .logo {
        width: 100px;
        /* Adjust the width of the logo as needed */
        height: 100px;
        /* Adjust the height of the logo as needed */
        margin-right: 20px;
    }

    .header-content {
        /* Add any additional styling for the header content here */
    }

    .header p {
        /* Your existing styles for the header paragraphs */
        /* You may adjust font-size or other properties as needed */
        margin-bottom: 10px !important;
        color: rgb(0, 0, 0);
        font-family: "Times New Roman";
        font-size: medium;
        font-style: normal;
        font-variant-ligatures: normal;
        font-variant-caps: normal;
        font-weight: 400;
        letter-spacing: normal;
        orphans: 2;
        text-indent: 0px;
        text-transform: none;
        widows: 2;
        word-spacing: 0px;
        -webkit-text-stroke-width: 0px;
        white-space: normal;
        background-color: rgb(255, 255, 255);
        text-decoration-thickness: initial;
        text-decoration-style: initial;
        text-decoration-color: initial;
        text-align: center;
    }

    .header p span {
        /* Your existing styles for the span elements */
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }

    .header p span[style*="font-family: Impact"] {
        /* Your existing styles for the span with font-family Impact */
        font-family: Impact, Charcoal, sans-serif;
    }

    .header p strong {
        /* Your existing styles for the strong elements */
        font-weight: 700;
    }

    @media print {
        * {
            /* margin-left: 0 !important;  */
            margin: auto !important;
        }


    }

    @media not print {
        .print-content {
            width: 8.27in !important;
            margin: 0 auto;
        }
    }
</style>

<div class="print-content print-evaluation" style="width: 100%">
    <div class="header">
        <img class="logo" src="{{ asset('images/app/aNCIP_logo150x150.png') }}" alt="NCIP Logo">
        <div class="header-content">
            <p><span>Republic of the Philippines</span><span>&nbsp;</span></p>
            <p>Office of the President&nbsp;</p>
            <p><strong>NATIONAL COMMISSION ON INDIGENOUS PEOPLES&nbsp;</strong></p>
            <p>6th &amp; 7th Floors Sunnymede I.T. Center, 1614 Quezon Avenue, South Triangle &nbsp;Quezon City&nbsp;
            </p>
            <p>Website: www.ncip.gov.ph</p>

        </div>

    </div>


    <hr style="border: 0.5px solid gray;">


    <div classs="evaluate_page_input">
        <table>

            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.75pt;margin-left:2.8pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                <strong>CHECKLIST OF REQUIREMENTS FOR THE APPROVAL OF PROJECT PROPOSALS&nbsp;</strong>
            </p>




            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>Project Title&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp; &nbsp; &nbsp;
                        :</strong>
                </p>
                {!! Form::textarea(
                    'evaluation_project_title',
                    old('evaluation_project_title', $folder->evaluation->evaluation_project_title),
                    [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Project Title',
                    ],
                ) !!}
            </div>

            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>Location&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</strong>
                </p>
                {!! Form::textarea('location', old('location', $folder->evaluation->location), [
                    'class' => 'form-control',
                    'rows' => 1,
                    'placeholder' => 'Location',
                ]) !!}
            </div>

            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>Cost &amp; Source&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;
                        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;:</strong>
                </p>
                {!! Form::textarea('cost_and_source', old('cost_and_source', $folder->evaluation->cost_and_source), [
                    'class' => 'form-control',
                    'rows' => 1,
                    'placeholder' => 'Cost and Source',
                ]) !!}
            </div>

            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>Period of implementation&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:</strong>
                </p>
                {!! Form::textarea(
                    'period_of_implementation',
                    old('period_of_implementation', $folder->evaluation->period_of_implementation),
                    [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Period of implementation',
                    ],
                ) !!}
            </div>

            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>No. of Beneficiaries&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;

                        :</strong>
                </p>
                {!! Form::textarea('no_of_beneficiaries', old('no_of_beneficiaries', $folder->evaluation->no_of_beneficiaries), [
                    'class' => 'form-control',
                    'rows' => 1,
                    'placeholder' => 'No. of Beneficiaries',
                ]) !!}
            </div>

            <div class="input-container">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
                    <strong>SYNOPSIS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</strong>
                </p>
                {!! Form::textarea('synopsis', old('synopsis', $folder->evaluation->synopsis), [
                    'class' => 'form-control',
                    'rows' => 1,
                    'placeholder' => 'SYNOPSIS',
                ]) !!}
            </div>





        </table>

        {{-- /end of .evaluate_page_input --}}
    </div>

    <br>


    {{-- <table style="float: left;border: none;width:967.25pt;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;" class="custom-font-size"> --}}
    <table style="border: none;width:100%;margin: 0, auto;border-collapse:collapse; print-content"
        class="custom-font-size">
        <tbody>
            <tr>
                <td rowspan="2"
                    style="width: 44.8pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 280.85pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:58.1pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">REQUIREMENTS&nbsp;</span></strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:14.2pt;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <strong><span style="font-size:24px;">&nbsp;</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="width: 212.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <strong><span style="font-size:24px;">COMPLIED WITH?</span></strong>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 429pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <strong><span style="font-size:24px;">REQUIRED ACTIONS&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.8pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <strong><span style="font-size:24px;">YES</span></strong>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.6pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <strong><span style="font-size:24px;">NO</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">A.</span></strong><strong><span
                                style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">Required Format&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.9pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.85pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">1.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Format&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('format_check', '1', $folder->evaluation->format_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'format_check_yes',
                        ]) !!}
                        </span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('format_check', '0', $folder->evaluation->format_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'format_check_no',
                        ]) !!}
                        </span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('format_comment', old('format_comment', $folder->evaluation->format_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">2.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Provincial Evaluation&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('provincial_evaluation_check', '1', $folder->evaluation->provincial_evaluation_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'provincial_evaluation_check_yes',
                        ]) !!}
                        </span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('provincial_evaluation_check', '0', $folder->evaluation->provincial_evaluation_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'provincial_evaluation_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'provincial_evaluation_comment',
                            old('provincial_evaluation_comment', $folder->evaluation->provincial_evaluation_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">3.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Regional Validation&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('regional_validation_check', '1', $folder->evaluation->regional_validation_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'regional_validation_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('regional_validation_check', '0', $folder->evaluation->regional_validation_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'regional_validation_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'regional_validation_comment',
                            old('regional_validation_comment', $folder->evaluation->regional_validation_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">B.</span></strong><strong><span
                                style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">Contents&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">I.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">General Information&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('general_information_check', '1', $folder->evaluation->general_information_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'general_information_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('general_information_check', '0', $folder->evaluation->general_information_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'general_information_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'general_information_comment',
                            old('general_information_comment', $folder->evaluation->general_information_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">II.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Background and Rationale&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'background_and_rationale_check',
                            '1',
                            $folder->evaluation->background_and_rationale_check == '1',
                            ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_yes'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'background_and_rationale_check',
                            '0',
                            $folder->evaluation->background_and_rationale_check == '0',
                            ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_no'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'background_and_rationale_comment',
                            old('background_and_rationale_comment', $folder->evaluation->background_and_rationale_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">III.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Objectives&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('objectives_check', '1', $folder->evaluation->objectives_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'objectives_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('objectives_check', '0', $folder->evaluation->objectives_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'objectives_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('objectives_comment', old('objectives_comment', $folder->evaluation->objectives_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:23.15pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-indent:-22.45pt;'>
                        <span style="font-size:24px;">IV.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Project Description: Inputs/Expected
                            Outputs/Outcome/Impact&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('project_description_check', '1', $folder->evaluation->project_description_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'project_description_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('project_description_check', '0', $folder->evaluation->project_description_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'project_description_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'project_description_comment',
                            old('project_description_comment', $folder->evaluation->project_description_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">V.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Project Implementation and M&amp;E Strategies&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'implementation_strategies_check',
                            '1',
                            $folder->evaluation->implementation_strategies_check == '1',
                            ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_yes'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'implementation_strategies_check',
                            '0',
                            $folder->evaluation->implementation_strategies_check == '0',
                            ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_no'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'implementation_strategies_comment',
                            old('implementation_strategies_comment', $folder->evaluation->implementation_strategies_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">VI.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Sustainability Plan&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('sustainability_plan_check', '1', $folder->evaluation->sustainability_plan_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'sustainability_plan_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('sustainability_plan_check', '0', $folder->evaluation->sustainability_plan_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'sustainability_plan_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'sustainability_plan_comment',
                            old('sustainability_plan_comment', $folder->evaluation->sustainability_plan_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">VII.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Budgetary Requirements&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('budgetary_requirements_check', '1', $folder->evaluation->budgetary_requirements_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'budgetary_requirements_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('budgetary_requirements_check', '0', $folder->evaluation->budgetary_requirements_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'budgetary_requirements_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'budgetary_requirements_comment',
                            old('budgetary_requirements_comment', $folder->evaluation->budgetary_requirements_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">VIII.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                            style="font-size:24px;">Attachments&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '1', $folder->evaluation->attachments_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'attachments_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '0', $folder->evaluation->attachments_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'attachments_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">IX.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Signatories&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('signatories_check', '1', $folder->evaluation->signatories_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'signatories_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('signatories_check', '0', $folder->evaluation->signatories_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'signatories_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('signatories_comment', old('signatories_comment', $folder->evaluation->signatories_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">C.</span></strong><strong><span
                                style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">Consistency with Priority Framework&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">1.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">IPRA (4 BR and 36 specific rights)&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('ipra_rights_check', '1', $folder->evaluation->ipra_rights_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'ipra_rights_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('ipra_rights_check', '0', $folder->evaluation->ipra_rights_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'ipra_rights_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment', $folder->evaluation->ipra_rights_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">2.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">President&rsquo;s Social Agenda &nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('presidents_agenda_check', '1', $folder->evaluation->presidents_agenda_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'presidents_agenda_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('presidents_agenda_check', '0', $folder->evaluation->presidents_agenda_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'presidents_agenda_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'presidents_agenda_comment',
                            old('presidents_agenda_comment', $folder->evaluation->presidents_agenda_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">3.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">PDP/PIP&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('pdp_pip_check', '1', $folder->evaluation->pdp_pip_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'pdp_pip_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('pdp_pip_check', '0', $folder->evaluation->pdp_pip_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'pdp_pip_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">4.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">IP Master Plan&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('ip_master_plan_check', '1', $folder->evaluation->ip_master_plan_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'ip_master_plan_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('ip_master_plan_check', '0', $folder->evaluation->ip_master_plan_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'ip_master_plan_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'ip_master_plan_comment',
                            old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">5.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Strategic Plan/ADSPPD&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_plan_check', '1', $folder->evaluation->strategic_plan_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'strategic_plan_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_plan_check', '0', $folder->evaluation->strategic_plan_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'strategic_plan_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'strategic_plan_comment',
                            old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">6.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Strategic Workflow Framework (SWF)&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('workflow_framework_check', '1', $folder->evaluation->workflow_framework_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'workflow_framework_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('workflow_framework_check', '0', $folder->evaluation->workflow_framework_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'workflow_framework_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'workflow_framework_comment',
                            old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">7.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">11 Building Blocks&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('building_blocks_check', '1', $folder->evaluation->building_blocks_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'building_blocks_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('building_blocks_check', '0', $folder->evaluation->building_blocks_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'building_blocks_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'building_blocks_comment',
                            old('building_blocks_comment', $folder->evaluation->building_blocks_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">8.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Strategic Directions&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_directions_check', '1', $folder->evaluation->strategic_directions_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'strategic_directions_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_directions_check', '0', $folder->evaluation->strategic_directions_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'strategic_directions_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'strategic_directions_comment',
                            old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">9.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">PrExC&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('prexc_check', '1', $folder->evaluation->prexc_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'prexc_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('prexc_check', '0', $folder->evaluation->prexc_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'prexc_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">10.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                            style="font-size:24px;">SDG&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('sdg_check', '1', $folder->evaluation->sdg_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'sdg_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('sdg_check', '0', $folder->evaluation->sdg_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'sdg_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">D.</span></strong><strong><span
                                style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <strong><span style="font-size:24px;">Completeness&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">1.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Signature&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('signature_check', '1', $folder->evaluation->signature_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'signature_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('signature_check', '0', $folder->evaluation->signature_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'signature_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">2.</span><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                            style="font-size:24px;">Attachment&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '1', $folder->evaluation->attachments_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'attachments_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '0', $folder->evaluation->attachments_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'attachments_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), [
                            'class' => 'form-control',
                            'rows' => 1,
                        ]) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;a. Project Procurement &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp;Management Plan (PPMP) &nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'procurement_management_plan_check',
                            '1',
                            $folder->evaluation->procurement_management_plan_check == '1',
                            ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_yes'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio(
                            'procurement_management_plan_check',
                            '0',
                            $folder->evaluation->procurement_management_plan_check == '0',
                            ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_no'],
                        ) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'procurement_management_plan_comment',
                            old('procurement_management_plan_comment', $folder->evaluation->procurement_management_plan_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;b.&nbsp;</span><span style="font-size:24px;">Project
                                Implementation &nbsp; &nbsp;Plan/Gantt Chart &nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('implementation_plan_check', '1', $folder->evaluation->implementation_plan_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'implementation_plan_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('implementation_plan_check', '0', $folder->evaluation->implementation_plan_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'implementation_plan_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'implementation_plan_comment',
                            old('presidents_agenda_comment', $folder->evaluation->implementation_plan_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;c.&nbsp;</span><span style="font-size:24px;">Summary of
                                Expenditures &nbsp;&nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('expenditure_summary_check', '1', $folder->evaluation->expenditure_summary_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'expenditure_summary_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('expenditure_summary_check', '0', $folder->evaluation->expenditure_summary_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'expenditure_summary_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'expenditure_summary_comment',
                            old('expenditure_summary_comment', $folder->evaluation->expenditure_summary_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;d.&nbsp;</span><span style="font-size:24px;">List of
                                Beneficiaries &nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('beneficiaries_check', '1', $folder->evaluation->beneficiaries_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'beneficiaries_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('beneficiaries_check', '0', $folder->evaluation->beneficiaries_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'beneficiaries_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'beneficiaries_comment',
                            old('beneficiaries_comment', $folder->evaluation->beneficiaries_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;e. Photocopy of the page of the &nbsp;Plan where the
                                project
                                is&nbsp; &nbsp;derived&nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('project_page_photocopy_check', '1', $folder->evaluation->project_page_photocopy_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'project_page_photocopy_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('project_page_photocopy_check', '0', $folder->evaluation->project_page_photocopy_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'page_photocopy_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'project_page_photocopy_comment',
                            old('project_page_photocopy_comment', $folder->evaluation->project_page_photocopy_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;f. Plan, Bill of materials and&nbsp; &nbsp;Vicinity Map
                                (Infra)&nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('plan_materials_map_check', '1', $folder->evaluation->plan_materials_map_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'plan_materials_map_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('plan_materials_map_check', '0', $folder->evaluation->plan_materials_map_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'plan_materials_map_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'plan_materials_map_comment',
                            old('plan_materials_map_comment', $folder->evaluation->plan_materials_map_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <div
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <p><span style="font-size:24px;">&nbsp;g. Return on Investment for &nbsp; &nbsp; &nbsp;
                                &nbsp;Livelihood and other similar &nbsp; &nbsp; &nbsp; &nbsp;projects&nbsp;</span></p>
                    </div>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('return_on_investment_check', '1', $folder->evaluation->return_on_investment_check == '1', [
                            'class' => 'form-check-input',
                            'id' => 'return_on_investment_check_yes',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                        <span style="font-size:24px;">&nbsp;{!! Form::radio('return_on_investment_check', '0', $folder->evaluation->return_on_investment_check == '0', [
                            'class' => 'form-check-input',
                            'id' => 'return_on_investment_check_no',
                        ]) !!}</span>
                    </p>
                </td>
                <td
                    style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                        <span style="font-size:24px;">{!! Form::textarea(
                            'return_on_investment_comment',
                            old('return_on_investment_comment', $folder->evaluation->return_on_investment_comment),
                            ['class' => 'form-control', 'rows' => 1],
                        ) !!}</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>


    <br>

    <table style="margin-right: calc(70%); width: 30%;">
        <tbody>

            <tr><br></tr>

            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.75pt;margin-left:2.8pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:left;'>
                <strong>For Completion by the Region/For Recommending Approval by the Executive Director:&nbsp;</strong>
            </p>


            <tr
                style="width:{{ strlen('For Completion by the Region/For Recommending Approval by the Executive Director:') }}ch">
                <td>
                    {!! Form::text('bureau_director_name', old('bureau_director_name', $folder->evaluation->bureau_director_name), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Name',
                    ]) !!}
                </td>
            </tr>
            <tr>
                <td>__________________________________________________________</td>
            </tr>
            <tr style="width:{{ strlen('________________________') }}ch">
                <td>
                    {!! Form::text(
                        'bureau_director_designation',
                        old('bureau_director_designation', $folder->evaluation->bureau_director_designation),
                        [
                            'class' => 'form-control',
                            'rows' => 1,
                            'placeholder' => 'Bureau Director Designation',
                        ],
                    ) !!}
                </td>
            </tr>
        </tbody>
    </table>

    {{-- /end of print --}}
</div>



<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div>



<script>
    $(document).ready(function() {

        console.log('test radio button function');
        // Function to update the radio button appearance
        function updateRadioButtons() {
            $('.print-evaluation .form-check-input').each(function() {
                const radio = $(this);
                const isChecked = radio.is(':checked');
                const checkmark = isChecked ? '✓' : '';

                // Create a <span> element to hold the checkmark symbol
                const checkmarkSpan = $('<span>').text(checkmark);

                // Remove any existing checkmark span if present
                radio.next('.checkmark').remove();

                // Hide the radio button
                radio.css('display', 'none');

                // Add the new checkmark span after the radio button
                radio.after(checkmarkSpan.addClass('checkmark'));
            });
        }

        // Call the function to update radio buttons when the page is loaded
        updateRadioButtons();

        // Add event listener to update radio buttons when any radio button is clicked
        $('.print-evaluation .form-check-input').on('change', function() {
            updateRadioButtons();
        });
    });
</script>
