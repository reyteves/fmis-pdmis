{{-- <style>
    .header p {
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
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }

    .header p span[style*="font-family: Impact"] {
        font-family: Impact, Charcoal, sans-serif;
    }

    .header p strong {
        font-weight: 700;
    }


    @media print {

        * {
            margin-left: auto
        }

        table {
            margin: 0 auto !important;
            /* Set left and right margins to center the table */
            width: 100% !important;
            border-collapse: collapse !important;

        }
    }


    @media not print {

        .print-content {
            width: 8.27in !important;
            ;
            margin: 0 auto;

        }
    }
</style>

<div class="print-content" style="width: 100%">

    <div class="header">
        <img class="logo" src="{{ asset('images/app/aNCIP_logo150x150.png') }}" alt="NCIP Logo">
        <div class="header-content">
            <p><span>Republic of the Philippines</span><span>&nbsp;</span></p>
            <p>Office of the President&nbsp;</p>
            <p><strong>NATIONAL COMMISSION ON INDIGENOUS PEOPLES&nbsp;</strong></p>
            <p>6th &amp; 7th Floors Sunnymede I.T. Center, 1614 Quezon Avenue, South Triangle &nbsp;Quezon City&nbsp;</p>
            <p>Website: www.ncip.gov.ph</p>
        </div>
    </div>
     --}}

<style>
    /* .evaluate_page_input .input-container {
        display: flex;
        align-items: center;
       
    }

    .evaluate_page_input .input-box {
        margin-left: 10px;
     
    } */

    .input-container {
  display: flex;
  align-items: center; /* Vertically align the label and input box */
}

.input-container p {
  margin: 0; /* Remove default paragraph margin */
}

.input-container strong {
  margin-right: 10px; /* Add spacing between the label and input box */
}

.input-container textarea {
  flex: 1; /* Take up the remaining space in the row */
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

        table {
            /* margin: 0 auto !important; */
            /* Set left and right margins to center the table */
            /* width: 100% !important;
            border-collapse: collapse !important; */

        }
    }

    @media not print {
        .print-content {
            width: 8.27in !important;
            margin: 0 auto;
        }
    }
</style>

<div class="print-content" style="width: 100%">
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
    <strong>
        <hr>
    </strong><br>

    <div classs="evaluate_page_input">
        <table>

        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.75pt;margin-left:2.8pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
            <strong>CHECKLIST OF REQUIREMENTS FOR THE APPROVAL OF PROJECT PROPOSALS&nbsp;</strong>
        </p>


        {{-- <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>Project Title&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;{!! Form::text(
                    'evaluation_project_title',
                    old('evaluation_project_title', $folder->evaluation->evaluation_project_title),
                    [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Project Title',
                    ],
                ) !!}</strong>
        </p> --}}


        <div class="input-container">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
              <strong>Project Title&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</strong>
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
          


        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>Location &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;</strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>Cost &amp; Source &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;</strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>Period of implementation &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;</strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>No. of Beneficiaries &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;
                :&nbsp;</strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
            <strong>SYNOPSIS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</strong> &nbsp;test
        </p>

    </table>

        {{-- /end of .evaluate_page_input --}}
    </div>

    <br>
    <table style="border: none;width:100%;margin: 0, auto;border-collapse:collapse; print-content">
        <tbody>
            <tr>
                <td rowspan="2"
                    style="width: 21.95pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td rowspan="2"
                    style="width: 198.65pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:58.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">REQUIREMENTS&nbsp;</span></strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:14.2pt;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <strong><span style="font-size:12px;">&nbsp;</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="width: 94.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <strong><span style="font-size:12px;">COMPLIED WITH?&nbsp;</span></strong>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 157.25pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <strong><span style="font-size:12px;">REQUIRED ACTIONS&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.8pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <strong><span style="font-size:12px;">YES&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.6pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <strong><span style="font-size:12px;">NO&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">A.</span></strong><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">Required Format&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.9pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.85pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">1.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;&nbsp;</span><span
                            style="font-size:12px;">Format&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">2.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;&nbsp;</span><span
                            style="font-size:12px;">Provincial Evaluation&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">3.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;&nbsp;</span><span
                            style="font-size:12px;">Regional Validation&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">B.</span></strong><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">Contents&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">I.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp; &nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">General Information&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">II.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Background and Rationale&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">III.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Objectives&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:23.15pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-indent:-22.45pt;line-height:normal;'>
                        <span style="font-size:12px;">IV.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Project Description: Inputs/Expected
                            Outputs/Outcome/Impact&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">V.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Project Implementation and M&amp;E
                            Strategies&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">VI.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Sustainability Plan&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">VII.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Budgetary Requirements&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">VIII.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                            style="font-size:12px;">Attachments&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">IX.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Signatories&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">C.</span></strong><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">Consistency with Priority Framework&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">1.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">IPRA (4 BR and 36 specific
                            rights)&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">2.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">President&rsquo;s Social Agenda
                            &nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">3.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">PDP/PIP&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">4.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">IP Master Plan&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">5.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Strategic Plan/ADSPPD&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">6.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Strategic Workflow Framework
                            (SWF)&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">7.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">11 Building Blocks&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">8.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Strategic Directions&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">9.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">PrExC&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">10.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                            style="font-size:12px;">SDG&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">D.</span></strong><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <strong><span style="font-size:12px;">Completeness&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">1.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Signature&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">2.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Attachment&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:37.45pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-indent:-18.0pt;line-height:normal;'>
                        <span style="font-size:12px;">a.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Project Procurement Management Plan (PPMP)
                            &nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:12px;">b.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Project Implementation Plan/Gantt Chart
                            &nbsp;</span></p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:12px;">c.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Summary of Expenditures &nbsp;&nbsp;</span></p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:12px;">d.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;</span><span
                            style="font-size:12px;">List of Beneficiaries &nbsp;</span></p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.5pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:37.45pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-indent:-18.0pt;line-height:normal;'>
                        <span style="font-size:12px;">e.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;
                            &nbsp;&nbsp;</span><span style="font-size:12px;">Photocopy of the page of the Plan where
                            the project is derived&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:37.45pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-indent:-18.0pt;line-height:normal;'>
                        <span style="font-size:12px;">f.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp; &nbsp;
                            &nbsp;</span><span style="font-size:12px;">Plan, Bill of materials and Vicinity Map
                            (Infra)&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.55pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 21.95pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        &nbsp;</p>
                </td>
                <td
                    style="width: 198.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:37.45pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:justify;text-indent:-18.0pt;line-height:normal;'>
                        <span style="font-size:12px;">g.</span><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                            style="font-size:12px;">Return on Investment for Livelihood and other similar
                            projects&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width: 157.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;line-height:normal;'>
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div>
