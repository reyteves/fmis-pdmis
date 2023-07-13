<style>
    @media print {
        body * {
            visibility: hidden;
        }

        .print-content,
        .print-content * {
            visibility: visible;
        }

        .print-content {
            position: absolute;
            left: 0;
            top: 0;

        }

        .print-content div {
            margin-bottom: 10px;
            /* font-size: 12px; */
        }
    }


    @media not print {



        .print-content div {
            /* margin-bottom: 10px; */
            /* font-size: 12px; */
        }



    }
</style>



<div class="print-content">

    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;border:none;'><strong><span
                style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>PROJECT PROPOSAL
                FORMAT&nbsp;</span></strong></p>


    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">I. GENERAL
                INFORMATION</span></strong></p>

    {{-- Project Title --}}

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>1.</span></strong>
                    </p>
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Title</span></strong></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:13px;font-family:"Arial",sans-serif;'>{{ $folder->project->name }}</span><span
                            style="font-size:12px;">&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- Project Site --}}

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>2.</span></strong>
                    </p>
                </td>
                <td colspan="2" style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Site</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td colspan="4" style="width: 400.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 11.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 85.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Sitio</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->street_address) !!}</span></p>
                </td>
                <td style="width: 4cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Barangay</span></em></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->barangay) !!}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 11.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 85.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Municipality</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->municipality) !!}</span></p>
                </td>
                <td style="width: 4cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Congressional
                                    District</span></em></strong></p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->congressional_district) !!}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 11.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 85.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Province</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->province) !!}</span></p>
                </td>
                <td style="width: 4cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Region</span></em></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->region) !!}</span></p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 11.8pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 85.15pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>CADT/CALT&nbsp;</span></em></strong>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>t{!! nl2br($folder->site->cadt_calt) !!}</span></p>
                </td>
                <td rowspan="2"
                    style="width: 4cm;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Name of
                                    AD</span></em></strong></p>
                </td>
                <td rowspan="2"
                    style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->ad_name) !!}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>


    <!-- Project Basis -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>3.</span></strong>
                    </p>
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Basis/es</span></strong>
                    </p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->project_basis }}</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- /Project Basis -->


    <!-- Project Cost -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>4.</span></strong>
                    </p>
                </td>
                <td colspan="2" style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Total Project
                                Cost</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->total_project_cost }}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 11.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 85.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Direct</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->direct_cost }}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 11.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 85.15pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Indirect</span></em></strong>
                    </p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->indirect_cost }}</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- /Project Cost -->


    <!-- Source of Fund and Budget Year -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>5.</span></strong>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Source of Fund/ Budget
                                Year</span></strong></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td rowspan="2"
                    style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->source_of_fund }}
                            / {{ $folder->budget->budget_year }}</span></p>
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

    <!-- /Source of Fund and Budget Year -->

    <!-- Core Program and Sub-program Addressed -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td rowspan="3"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>7.</span></strong>
                    </p>
                </td>
                <td rowspan="3"
                    style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 10.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Core Program and Sub-program
                                Addressed</span></strong></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td rowspan="3"
                    style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->core_program }}
                            / {{ $folder->budget->sub_program }}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- /Core Program and Sub-program Addressed -->

    {{-- Project Status --}}

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>8.</span></strong>
                    </p>
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Status</span></strong>
                    </p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 78.05pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>
                            {{ Form::checkbox('project_status[]', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_checkbox', 'disabled' => 'disabled']) }}
                            Proposed</span></p>
                </td>
                <td style="width: 69.6pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('project_status[]', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_checkbox', 'disabled' => 'disabled']) }}
                            On-going</span></p>
                </td>
                <td style="width: 3cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('project_status[]', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_checkbox', 'disabled' => 'disabled']) }}
                            Continuing</span></p>
                </td>
                <td style="width: 83.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('project_status[]', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_checkbox', 'disabled' => 'disabled']) }}
                            Terminating</span></p>
                </td>
                <td style="width: 84.1pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox', 'disabled' => 'disabled']) }}
                            Coordinated</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- /Project Status --}}

    <!-- Project Duration -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>11.</span></strong>
                    </p>
                </td>
                <td colspan="2" style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Duration</span></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 11.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 85.15pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Target date of
                                    start</span></em></strong></p>
                </td>
                <td rowspan="2"
                    style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->target_date_start }}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 11.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
                <td rowspan="2"
                    style="width: 85.15pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Target date of
                                    completion</span></em></strong></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></em></strong>
                    </p>
                </td>
                <td rowspan="2"
                    style="width: 13.8pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ $folder->budget->target_date_completion }}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 15.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- /Project Duration -->

    <!-- Mode of Implementation -->

    <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>12.</span></strong>
                    </p>
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Mode of
                                Implementation</span></strong></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 147.65pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('implementation_mode', 'by-administration', $folder->budget->implementation_mode == 'by-administration', ['class' => 'form-check-input', 'id' => 'by-administration', 'checked' => $folder->budget->implementation_mode == 'by-administration', 'disabled' => 'disabled']) }}
                            by administration</span></p>
                </td>
                <td style="width: 252.55pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('implementation_mode', 'by-contract', $folder->budget->implementation_mode == 'by-contract', ['class' => 'form-check-input', 'id' => 'by-contract', 'checked' => $folder->budget->implementation_mode == 'by-contract', 'disabled' => 'disabled']) }}
                            by contract</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- /Mode of Implementation -->


    {{-- Background and Rationale --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">II. BACKGROUND AND
                RATIONALE</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->background_and_rationale)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>


    {{-- / Background and Rationale --}}


    {{-- Objectives  --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Objectives</h4>
            <div>{!! nl2br(e($folder->project->objectives)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">III.
                OBJECTIVES</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->objectives)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>

    {{-- Project Description --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Project Description</h4>
            <div>{!! nl2br(e($folder->project->description)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">IV. PROJECT
                DESCRIPTION</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->description)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>


    {{-- Project Implementation --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Project Implementation</h4>
            <div>{!! nl2br(e($folder->project->project_implementation)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">IV. PROJECT
                IMPLEMENTATION</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->project_implementation)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>

    {{-- Monitoring and Evaluation --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Monitoring and Evaluation</h4>
            <div>{!! nl2br(e($folder->project->monitoring_evaluation)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">V. MONITORING AND
                EVALUATION</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->monitoring_evaluation)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>

    {{-- Potential Risk --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Potential Risk</h4>
            <div>{!! nl2br(e($folder->project->potential_risk)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">VI. POTENTIAL
                RISKS</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->potential_risk)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>

    {{-- Sustainability Plan --}}
    {{-- <div class="row">
        <div class="col-xs-12">
            <h4>Sustainability Plan</h4>
            <div>{!! nl2br(e($folder->project->sustainability_plan)) !!}</div>
        </div>
    </div> --}}

    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">VII. SUSTAINABIITY
                PLAN</span></strong></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 36.0pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->sustainability_plan)) !!}</span></p>
    <p style="margin-right: 22.0pt; text-align: justify; text-indent: 2.25pt;"><span
            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>



    <p><strong><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">VIII.
                ATTACHMENTS</span></strong></p>
    <ol style="list-style-type: lower-alpha;">
        <li><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">Project Procurement
                Management Plan (PPMP)– PPF 1a (Annex B) {!! Form::checkbox('ppmp', 'ppmp', old('ppmp', $folder->attachment->ppmp) == 'checked', [
                    'class' => 'form-check-input',
                    'id' => 'ppmp_checkbox',
                    'disabled' => 'disabled',
                ]) !!}</span>
        </li>

        <li><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">Project Implementation
                Plan/Gantt Chart – PPF 1b (Annex C) {!! Form::checkbox(
                    'implementation_plan',
                    'implementation_plan',
                    old('implementation_plan', $folder->attachment->implementation_plan) == 'checked',
                    ['class' => 'form-check-input', 'id' => 'implementation_plan_checkbox', 'disabled' => 'disabled'],
                ) !!}</span>

        </li>
        <li><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">Summary of
                Expenditures – PPF 1c (Annex D) {!! Form::checkbox(
                    'summary_of_expenditures',
                    'summary_of_expenditures',
                    old('summary_of_expenditures', $folder->attachment->summary_of_expenditures) == 'checked',
                    ['class' => 'form-check-input', 'id' => 'summary_of_expenditures_checkbox', 'disabled' => 'disabled'],
                ) !!}</span>

        </li>
        <li><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">List of Beneficiaries
                – PPF 1d (Annex E) {!! Form::checkbox(
                    'list_of_beneficiaries',
                    'list_of_beneficiaries',
                    old('list_of_beneficiaries', $folder->attachment->list_of_beneficiaries) == 'checked',
                    ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries_checkbox', 'disabled' => 'disabled'],
                ) !!}</span>

        </li>
        <li><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">Other attachments
                –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity map for
                    Infrastructure, Return of Investments for livelihood and other similar projects
                    {!! Form::checkbox(
                        'other_attachments',
                        'other_attachments',
                        old('other_attachments', $folder->attachment->other_attachments) == 'checked',
                        ['class' => 'form-check-input', 'id' => 'other_attachments_checkbox', 'disabled' => 'disabled'],
                    ) !!}</span></span>

        </li>
    </ol>




    {{-- Signatures Checklist --}}


    <div align="center" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
        <table style="width: 5.2e+2pt;border-collapse:collapse;border:none;">
            <tbody>
                <tr>
                    <td style="width: 162.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span
                                style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                    'prepared_by_checkbox[]',
                                    'Prepared by: CSC Staff',
                                    old('prepared_by_checkbox', $folder->signature->prepared_by_checkbox) == 'checked',
                                    ['id' => 'prepared_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                                ) !!}&nbsp;</span><span
                                style='font-family:"Arial",sans-serif;color:black;'>Prepared by:</span></p>
                    </td>
                    <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td style="width: 6cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span
                                style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                    'evaluated_by_checkbox[]',
                                    'Evaluated by: Provincial Officer',
                                    old('evaluated_by_checkbox', $folder->signature->evaluated_by_checkbox) == 'checked',
                                    ['id' => 'evaluated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                                ) !!}&nbsp;</span><span
                                style='font-family:"Arial",sans-serif;color:black;'>Evaluated by:</span></p>
                    </td>
                    <td style="width: 14.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td style="width: 163pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                'confirmed_by_checkbox[]',
                                'Confirmed by: IPS/IPO Heads/IP Leader/Elder',
                                old('confirmed_by_checkbox', $folder->signature->confirmed_by_checkbox) == 'checked',
                                ['id' => 'confirmed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                            ) !!}
                                &nbsp;</span><span style='font-family:"Arial",sans-serif;color:black;'>Confirmed
                                by:</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 162.8pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('prepared_by_input', $folder->signature->prepared_by_input) }}</span></p>
                    </td>
                    <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 6cm;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('evaluated_by_input', $folder->signature->evaluated_by_input) }}</span></p>
                    </td>
                    <td style="width: 14.2pt;border: none;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 163pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('confirmed_by_input', $folder->signature->confirmed_by_input) }}</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 162.8pt;border: none;padding: 0cm 5.4pt;height: 12.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>CSC Staff</span></strong>
                        </p>
                    </td>
                    <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 12.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
                        </p>
                    </td>
                    <td style="width: 6cm;border: none;padding: 0cm 5.4pt;height: 12.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>Provincial
                                    Officer</span></strong></p>
                    </td>
                    <td style="width: 14.2pt;border: none;padding: 0cm 5.4pt;height: 12.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
                        </p>
                    </td>
                    <td style="width: 163pt;border: none;padding: 0cm 5.4pt;height: 12.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-indent:-3.6pt;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>IPS/IPO Heads/IP
                                    Leader/Elder</span></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <div align="center" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
        <table style="width: 4.8e+2pt;border-collapse:collapse;border:none;">
            <tbody>
                <tr>
                    <td style="width: 180pt;border: none;padding: 0cm 5.4pt;height: 18.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span
                                style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                    'validated_by_checkbox[]',
                                    'Validated by: Regional Staff',
                                    old('validated_by_checkbox', $folder->signature->validated_by_checkbox) == 'checked',
                                    ['id' => 'validated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                                ) !!}&nbsp;</span><span
                                style='font-family:"Arial",sans-serif;color:black;'>Validated by:</span></p>
                    </td>
                    <td style="width: 109.15pt;border: none;padding: 0cm 5.4pt;height: 18.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td style="width: 186.9pt;border: none;padding: 0cm 5.4pt;height: 18.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span
                                style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                    'endorsed_by_checkbox[]',
                                    'Endorsed by: Regional Director',
                                    old('endorsed_by_checkbox', $folder->signature->endorsed_by_checkbox) == 'checked',
                                    ['id' => 'endorsed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                                ) !!}&nbsp;</span><span
                                style='font-family:"Arial",sans-serif;color:black;'>Endorsed by:</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 180pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('validated_by_input', $folder->signature->validated_by_input) }}</span></p>
                    </td>
                    <td style="width: 109.15pt;border: none;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 186.9pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('endorsed_by_input', $folder->signature->endorsed_by_input) }}</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 180pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>Regional
                                    Staff</span></strong></p>
                    </td>
                    <td style="width: 109.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
                        </p>
                    </td>
                    <td style="width: 186.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>Regional
                                    Director</span></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'><span
            style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <table style="width: 2.3e+2pt;margin-left:134.7pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 231.45pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span
                            style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>{!! Form::checkbox(
                                'recommended_by_checkbox[]',
                                'Recommending Approval: Executive Director',
                                old('recommended_by_checkbox', $folder->signature->recommended_by_checkbox) == 'checked',
                                ['id' => 'recommended_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                            ) !!}&nbsp;</span><span
                            style='font-family:"Arial",sans-serif;color:black;'>Recommending approval:</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 231.45pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.1pt;vertical-align: bottom;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('recommended_by_input', $folder->signature->recommended_by_input) }}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 231.45pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <strong><span style='font-family:"Arial",sans-serif;color:black;'>Executive
                                Director</span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong></p>
    <table style="width: 1.6e+2pt;margin-left:161.4pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 160.55pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span style='font-family:"Segoe UI Emoji",sans-serif;color:black;'>
                            {!! Form::checkbox(
                                'approved_by_checkbox[]',
                                'Approved by: Chairperson',
                                old('approved_by_checkbox', $folder->signature->approved_by_checkbox) == 'checked',
                                ['id' => 'approved_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
                            ) !!}&nbsp;</span><span
                            style='font-family:"Arial",sans-serif;color:black;'>Approved:</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 160.55pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.5pt;vertical-align: bottom;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span style='font-family:"Arial",sans-serif;color:black;'>{{ old('approved_by_input', $folder->signature->approved_by_input) }}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 160.55pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <strong><span style='font-family:"Arial",sans-serif;color:black;'>Chairperson</span></strong>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

        {{-- /Signatures Checklist --}}


    {{-- End Printable Page --}}
</div>

<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div>
