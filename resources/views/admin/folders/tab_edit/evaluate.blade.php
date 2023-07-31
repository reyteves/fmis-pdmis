<style>
    table {
      float: left;
      border: none;
      width: 967.25pt;
      border-collapse: collapse;
      margin-left: 6.75pt;
      margin-right: 6.75pt;
    }
  
    td {
      padding: 1.65pt 6pt 0cm 0cm;
      height: 11.4pt;
      vertical-align: top;
      font-size: var(--font-size);
      font-family: "Calibri", sans-serif;
      color: black;
    }

    .custom-font-size tr td p span {
    font-size: 16px !important;
}


</style>



<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.65pt;margin-left:-.75pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;margin-bottom:8.65pt;'><br></p>
    <table style="float: left;border: none;width:967.25pt;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;margin-bottom:15pt;" class="custom-font-size">
    <tbody>
        <tr>
            <td style="width: 100%;" colspan="3">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.75pt;margin-left:2.8pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-align:center;'><strong>CHECKLIST OF REQUIREMENTS FOR THE APPROVAL OF PROJECT PROPOSALS&nbsp;</strong></p>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Project Title&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('evaluation_project_title', old('evaluation_project_title',  $folder->evaluation->evaluation_project_title), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'Project Title'
            ]) !!}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Location&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('location', old('location', $folder->evaluation->location), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'Location'
            ]) !!}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Cost &amp; Source&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('cost_and_source', old('cost_and_source', $folder->evaluation->cost_and_source), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'Cost and Source'
            ]) !!}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Period of implementation&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('period_of_implementation', old('period_of_implementation', $folder->evaluation->period_of_implementation), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'Period of implementation'
            ]) !!}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>No. of Beneficiaries&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('no_of_beneficiaries', old('no_of_beneficiaries', $folder->evaluation->no_of_beneficiaries), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'No. of Beneficiaries'
            ]) !!}</td>
        </tr>
        <tr style="margin-bottom:25px;">
            <td style="text-align: left;"><strong>SYNOPSIS&nbsp;</strong></td>
            <td style="width: 5px;"><span style="text-align: center;">:</span></td>
            <td>{!! Form::text('synopsis', old('synopsis', $folder->evaluation->synopsis), [
                'class' => 'form-control',
                'rows' => 1,
                'placeholder' => 'SYNOPSIS'
            ]) !!}</td>
        </tr>
    </tbody>
</table>



<table style="float: left;border: none;width:967.25pt;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;" class="custom-font-size">
    <tbody>
        <tr>
            <td rowspan="2"
                style="width: 44.8pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td rowspan="2"
                style="width: 280.85pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:58.1pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">REQUIREMENTS&nbsp;</span></strong></p>
                <p
                    style='margin-top:0cm;margin-right:14.2pt;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <strong><span style="font-size:24px;">&nbsp;</span></strong></p>
            </td>
            <td colspan="2"
                style="width: 212.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <strong><span style="font-size:24px;">COMPLIED WITH?</span></strong></p>
            </td>
            <td rowspan="2"
                style="width: 429pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.65pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <strong><span style="font-size:24px;">REQUIRED ACTIONS&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.8pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <strong><span style="font-size:24px;">YES</span></strong></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.6pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <strong><span style="font-size:24px;">NO</span></strong></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">A.</span></strong><strong><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">Required Format&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.9pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:7.85pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">1.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Format&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('format_check', '1', $folder->evaluation->format_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'format_check_yes',
                    ]) !!}
                    </span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('format_check', '0', $folder->evaluation->format_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'format_check_no',
                    ]) !!}
                    </span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('format_comment', old('format_comment', $folder->evaluation->format_comment), [
                        'class' => 'form-control',
                        'rows' => 1,
                    ]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">2.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Provincial Evaluation&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('provincial_evaluation_check', '1', $folder->evaluation->provincial_evaluation_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'provincial_evaluation_check_yes',
                    ]) !!}
                    </span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('provincial_evaluation_check', '0', $folder->evaluation->provincial_evaluation_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'provincial_evaluation_check_no',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'provincial_evaluation_comment',
                        old('provincial_evaluation_comment', $folder->evaluation->provincial_evaluation_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">3.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Regional Validation&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('regional_validation_check', '1', $folder->evaluation->regional_validation_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'regional_validation_check_yes',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('regional_validation_check', '0', $folder->evaluation->regional_validation_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'regional_validation_check_no',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'regional_validation_comment',
                        old('regional_validation_comment', $folder->evaluation->regional_validation_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">B.</span></strong><strong><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">Contents&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">I.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">General Information&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('general_information_check', '1', $folder->evaluation->general_information_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'general_information_check_yes',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('general_information_check', '0', $folder->evaluation->general_information_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'general_information_check_no',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'general_information_comment',
                        old('general_information_comment', $folder->evaluation->general_information_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">II.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Background and Rationale&nbsp;</span></p>
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
                    ) !!}</span></p>
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
                    ) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'background_and_rationale_comment',
                        old('background_and_rationale_comment', $folder->evaluation->background_and_rationale_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">III.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Objectives&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('objectives_check', '1', $folder->evaluation->objectives_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'objectives_check_yes',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('objectives_check', '0', $folder->evaluation->objectives_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'objectives_check_no',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('objectives_comment', old('objectives_comment', $folder->evaluation->objectives_comment), [
                        'class' => 'form-control',
                        'rows' => 1,
                    ]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:23.15pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-indent:-22.45pt;'>
                    <span style="font-size:24px;">IV.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Project Description: Inputs/Expected
                        Outputs/Outcome/Impact&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('project_description_check', '1', $folder->evaluation->project_description_check == '1', [
                        'class' => 'form-check-input',
                        'id' => 'project_description_check_yes',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('project_description_check', '0', $folder->evaluation->project_description_check == '0', [
                        'class' => 'form-check-input',
                        'id' => 'project_description_check_no',
                    ]) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'project_description_comment',
                        old('project_description_comment', $folder->evaluation->project_description_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">V.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Project Implementation and M&amp;E Strategies&nbsp;</span></p>
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
                    ) !!}</span></p>
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
                    ) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea(
                        'implementation_strategies_comment',
                        old('implementation_strategies_comment', $folder->evaluation->implementation_strategies_comment),
                        ['class' => 'form-control', 'rows' => 1],
                    ) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">VI.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Sustainability Plan&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('sustainability_plan_check', '1', $folder->evaluation->sustainability_plan_check == '1', ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('sustainability_plan_check', '0', $folder->evaluation->sustainability_plan_check == '0', ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('sustainability_plan_comment', old('sustainability_plan_comment', $folder->evaluation->sustainability_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">VII.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Budgetary Requirements&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('budgetary_requirements_check', '1', $folder->evaluation->budgetary_requirements_check == '1', ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('budgetary_requirements_check', '0', $folder->evaluation->budgetary_requirements_check == '0', ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('budgetary_requirements_comment', old('budgetary_requirements_comment', $folder->evaluation->budgetary_requirements_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">VIII.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                        style="font-size:24px;">Attachments&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '1', $folder->evaluation->attachments_check == '1', ['class' => 'form-check-input', 'id' => 'attachments_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '0', $folder->evaluation->attachments_check == '0', ['class' => 'form-check-input', 'id' => 'attachments_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">IX.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Signatories&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('signatories_check', '1', $folder->evaluation->signatories_check == '1', ['class' => 'form-check-input', 'id' => 'signatories_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('signatories_check', '0', $folder->evaluation->signatories_check == '0', ['class' => 'form-check-input', 'id' => 'signatories_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('signatories_comment', old('signatories_comment', $folder->evaluation->signatories_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">C.</span></strong><strong><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">Consistency with Priority Framework&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">1.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">IPRA (4 BR and 36 specific rights)&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('ipra_rights_check', '1', $folder->evaluation->ipra_rights_check == '1', ['class' => 'form-check-input', 'id' => 'ipra_rights_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('ipra_rights_check', '0', $folder->evaluation->ipra_rights_check == '0', ['class' => 'form-check-input', 'id' => 'ipra_rights_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment', $folder->evaluation->ipra_rights_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">2.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">President&rsquo;s Social Agenda &nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('presidents_agenda_check', '1', $folder->evaluation->presidents_agenda_check == '1', ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('presidents_agenda_check', '0', $folder->evaluation->presidents_agenda_check == '0', ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('presidents_agenda_comment', old('presidents_agenda_comment', $folder->evaluation->presidents_agenda_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">3.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">PDP/PIP&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('pdp_pip_check', '1', $folder->evaluation->pdp_pip_check == '1', ['class' => 'form-check-input', 'id' => 'pdp_pip_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('pdp_pip_check', '0', $folder->evaluation->pdp_pip_check == '0', ['class' => 'form-check-input', 'id' => 'pdp_pip_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">4.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">IP Master Plan&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('ip_master_plan_check', '1', $folder->evaluation->ip_master_plan_check == '1', ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('ip_master_plan_check', '0', $folder->evaluation->ip_master_plan_check == '0', ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">5.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Strategic Plan/ADSPPD&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_plan_check', '1', $folder->evaluation->strategic_plan_check == '1', ['class' => 'form-check-input', 'id' => 'strategic_plan_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_plan_check', '0', $folder->evaluation->strategic_plan_check == '0', ['class' => 'form-check-input', 'id' => 'strategic_plan_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">6.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Strategic Workflow Framework (SWF)&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('workflow_framework_check', '1', $folder->evaluation->workflow_framework_check == '1', ['class' => 'form-check-input', 'id' => 'workflow_framework_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('workflow_framework_check', '0', $folder->evaluation->workflow_framework_check == '0', ['class' => 'form-check-input', 'id' => 'workflow_framework_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">7.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">11 Building Blocks&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('building_blocks_check', '1', $folder->evaluation->building_blocks_check == '1', ['class' => 'form-check-input', 'id' => 'building_blocks_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('building_blocks_check', '0', $folder->evaluation->building_blocks_check == '0', ['class' => 'form-check-input', 'id' => 'building_blocks_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('building_blocks_comment', old('building_blocks_comment', $folder->evaluation->building_blocks_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">8.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Strategic Directions&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_directions_check', '1', $folder->evaluation->strategic_directions_check == '1', ['class' => 'form-check-input', 'id' => 'strategic_directions_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('strategic_directions_check', '0', $folder->evaluation->strategic_directions_check == '0', ['class' => 'form-check-input', 'id' => 'strategic_directions_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">9.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">PrExC&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('prexc_check', '1', $folder->evaluation->prexc_check == '1', ['class' => 'form-check-input', 'id' => 'prexc_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('prexc_check', '0', $folder->evaluation->prexc_check == '0', ['class' => 'form-check-input', 'id' => 'prexc_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">10.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span><span
                        style="font-size:24px;">SDG&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('sdg_check', '1', $folder->evaluation->sdg_check == '1', ['class' => 'form-check-input', 'id' => 'sdg_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('sdg_check', '0', $folder->evaluation->sdg_check == '0', ['class' => 'form-check-input', 'id' => 'sdg_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">D.</span></strong><strong><span
                            style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.7pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <strong><span style="font-size:24px;">Completeness&nbsp;</span></strong></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">1.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Signature&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('signature_check', '1', $folder->evaluation->signature_check == '1', ['class' => 'form-check-input', 'id' => 'signature_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('signature_check', '0', $folder->evaluation->signature_check == '0', ['class' => 'form-check-input', 'id' => 'signature_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">2.</span><span
                        style='font-size:24px;font-family:"Arial",sans-serif;'>&nbsp;&nbsp;</span><span
                        style="font-size:24px;">Attachment&nbsp;</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '1', $folder->evaluation->attachments_check == '1', ['class' => 'form-check-input', 'id' => 'attachments_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('attachments_check', '0', $folder->evaluation->attachments_check == '0', ['class' => 'form-check-input', 'id' => 'attachments_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <div
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <p><span style="font-size:24px;">&nbsp;a. Project Procurement &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;Management Plan (PPMP) &nbsp;</span></p>
                </div>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('procurement_management_plan_check', '1', $folder->evaluation->procurement_management_plan_check == '1', ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('procurement_management_plan_check', '0', $folder->evaluation->procurement_management_plan_check == '0', ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('procurement_management_plan_comment', old('procurement_management_plan_comment', $folder->evaluation->procurement_management_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
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
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('implementation_plan_check', '1', $folder->evaluation->implementation_plan_check== '1', ['class' => 'form-check-input', 'id' => 'implementation_plan_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('implementation_plan_check', '0', $folder->evaluation->implementation_plan_check== '0', ['class' => 'form-check-input', 'id' => 'implementation_plan_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('implementation_plan_comment', old('presidents_agenda_comment', $folder->evaluation->implementation_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
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
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('expenditure_summary_check', '1', $folder->evaluation->expenditure_summary_check == '1', ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('expenditure_summary_check', '0', $folder->evaluation->expenditure_summary_check == '0', ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.3pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('expenditure_summary_comment', old('expenditure_summary_comment', $folder->evaluation->expenditure_summary_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
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
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('beneficiaries_check', '1', $folder->evaluation->beneficiaries_check == '1', ['class' => 'form-check-input', 'id' => 'beneficiaries_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('beneficiaries_check', '0', $folder->evaluation->beneficiaries_check == '0', ['class' => 'form-check-input', 'id' => 'beneficiaries_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 11.4pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('beneficiaries_comment', old('beneficiaries_comment', $folder->evaluation->beneficiaries_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
            </td>
            <td
                style="width: 280.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <div
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <p><span style="font-size:24px;">&nbsp;e. Photocopy of the page of the &nbsp;Plan where the project
                            is&nbsp; &nbsp;derived&nbsp;</span></p>
                </div>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('project_page_photocopy_check', '1', $folder->evaluation->project_page_photocopy_check == '1', ['class' => 'form-check-input', 'id' => 'project_page_photocopy_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('project_page_photocopy_check', '0', $folder->evaluation->project_page_photocopy_check == '0', ['class' => 'form-check-input', 'id' => 'page_photocopy_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('project_page_photocopy_comment', old('project_page_photocopy_comment', $folder->evaluation->project_page_photocopy_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
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
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('plan_materials_map_check', '1', $folder->evaluation->plan_materials_map_check == '1', ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('plan_materials_map_check', '0', $folder->evaluation->plan_materials_map_check == '0', ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.45pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('plan_materials_map_comment', old('plan_materials_map_comment', $folder->evaluation->plan_materials_map_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
        <tr>
            <td
                style="width: 44.8pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">&nbsp;</span></p>
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
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('return_on_investment_check', '1', $folder->evaluation->return_on_investment_check == '1', ['class' => 'form-check-input', 'id' => 'return_on_investment_check_yes']) !!}</span></p>
            </td>
            <td
                style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;text-align:center;'>
                    <span style="font-size:24px;">&nbsp;{!! Form::radio('return_on_investment_check', '0', $folder->evaluation->return_on_investment_check == '0', ['class' => 'form-check-input', 'id' => 'return_on_investment_check_no']) !!}</span></p>
            </td>
            <td
                style="width: 429pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 1.65pt 6pt 0cm 0cm;height: 22.35pt;vertical-align: top;">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:black;'>
                    <span style="font-size:24px;">{!! Form::textarea('return_on_investment_comment', old('return_on_investment_comment', $folder->evaluation->return_on_investment_comment), ['class' => 'form-control', 'rows' => 1]) !!}</span></p>
            </td>
        </tr>
    </tbody>
</table>

{{-- <p><br></p>
<table style="margin-right: calc(34%); width: 66%;">
    <tbody>
        <tr>
            <td>
                <p>For Completion by the Region/For Recommending Approval by the Executive Director:</p>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr style="width:20px">
            <td>
                {!! Form::text('bureau_director_name', old('bureau_director_name', $folder->evaluation->bureau_director_name), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Name',
                    ]) !!}
            </td>
        </tr>
        <tr>
            <td>________________________</td>
        </tr>
        <tr style="width:20px">
            <td>
                {!! Form::text('bureau_director_designation', old('bureau_director_designation', $folder->evaluation->bureau_director_designation), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Designation',
                    ]) !!}
            </td>
        </tr>
    </tbody>
</table> --}}



{{-- <p><br></p>
<table style="margin-right: calc(34%); width: 66%;">
    <tbody>
        <tr>
            <td>
                <p>For Completion by the Region/For Recommending Approval by the Executive Director:</p>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr style="width:20px">
            <td>
                {!! Form::text('bureau_director_name', old('bureau_director_name', $folder->evaluation->bureau_director_name), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Name',
                    ]) !!}
            </td>
        </tr>
        <tr>
            <td>________________________</td>
        </tr>
        <tr style="width:20px">
            <td>
                {!! Form::text('bureau_director_designation', old('bureau_director_designation', $folder->evaluation->bureau_director_designation), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Designation',
                    ]) !!}
            </td>
        </tr>
    </tbody>
</table> --}}



<p><br></p>
<table style="margin-right: calc(70%); width: 30%;">
    <tbody>
        <tr>
            <td>
                <p>For Completion by the Region/For Recommending Approval by the Executive Director:</p>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr style="width:{{ strlen('For Completion by the Region/For Recommending Approval by the Executive Director:') }}ch">
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
                {!! Form::text('bureau_director_designation', old('bureau_director_designation', $folder->evaluation->bureau_director_designation), [
                        'class' => 'form-control',
                        'rows' => 1,
                        'placeholder' => 'Bureau Director Designation',
                    ]) !!}
            </td>
        </tr>
    </tbody>
</table>




