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
            page-break-inside: avoid !important;
        }


        div,
        p,
        tr {
            page-break-inside: avoid !important;
        }

        td {

            page-break-inside: avoid !important;
        }

    }

    @media not print {

        .print-content,
        .print-content * {
            visibility: visible;
        }

        .print-content {
            /* position: absolute; */
            left: 0;
            top: 0;

        }

        .print-content div {
            margin-bottom: 10px;
        }

        .print-content {
            width: 8.27in;
            margin: 0 auto;

        }

        .row-spacing td {
            padding-bottom: 10px;
        }

        .custom-font-size tr td p span {
            font-size: 17px !important;
        }
    }
</style>

<div class="print-content custom-font-size ">


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


    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;border:none;'><strong><span
                style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>PROJECT PROPOSAL
                FORMAT&nbsp;</span></strong></p>


    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">I. GENERAL
                INFORMATION</span></strong></p>

    {{-- Project Title --}}

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>1.</span></strong>
                        </p> --}}
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 11.25pt;vertical-align: top;">

                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Title</span></strong>
                    </p>
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

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>2.</span></strong>
                        </p> --}}
                </td>
                <td colspan="2" style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project Site</span></strong>
                    </p>
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
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->street_address) !!}</span>
                    </p>
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
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'
                            id="barangaySpan">{!! nl2br($folder->site->barangay) !!}</span>
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
                            style='font-size:12px;font-family:"Arial",sans-serif;'
                            id="citySpan">{!! nl2br($folder->site->municipality) !!}</span>
                    </p>
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
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->congressional_district) !!}</span>
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
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Province</span></em></strong>
                    </p>
                </td>
                <td style="width: 13.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 135.85pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
                        {{-- <span style='font-size:12px;font-family:"Arial",sans-serif;'
                            name="province">{!! nl2br($folder->site->province) !!}</span> --}}
                        <span style='font-size: 12px; font-family: "Arial", sans-serif;' name="province"
                            id="provinceSpan">
                            {!! nl2br($folder->site->province) !!}
                        </span>
                    </p>
                </td>
                <td style="width: 4cm;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><em><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'>Region</span></em></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;" field-key='region'>
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>:</span></strong></p>
                </td>
                <td style="width: 136.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->region) !!}</span>
                    </p> --}}

                    <p style='margin: 0cm; font-size: 16px; font-family: "Times New Roman", serif;'>
                        <span style='font-size: 12px; font-family: "Arial", sans-serif;' name="region">
                            {!! nl2br($folder->site->region) !!}
                        </span>
                    </p>

                </td>
                {{-- 
                <p style='margin: 0cm; font-size: 16px; font-family: "Times New Roman", serif;'>
                    <span style='font-size: 12px; font-family: "Arial", sans-serif;' name="region">
                        {!! nl2br($folder->site->region) !!}
                    </span>
                </p> --}}

            </tr>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                    </p>
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
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->cadt_calt) !!}</span>
                    </p>
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
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{!! nl2br($folder->site->ad_name) !!}</span>
                    </p>
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

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>3.</span></strong>
                        </p> --}}
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project
                                Basis/es</span></strong>
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

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>4.</span></strong>
                        </p> --}}
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
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                    </p>
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
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                    </p>
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

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td rowspan="2"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>5.</span></strong>
                        </p> --}}
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

    {{-- beneficiaries --}}
    <table style="width: 4.8e+2pt; border-collapse: collapse; border: none;">
        <tbody>
            <tr>
                <td style="width: 82.8pt; border: none; padding: 0cm 5.4pt; height: 11.05pt; vertical-align: top;"
                    rowspan="2">
                    <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                        <strong><span style="font-family: 'Times New Roman',serif; color: black;">Estimated Numvbers of
                                Partner Beneficiaries per IP Group</span></strong>
                    </p>
                </td>
                <td style="width: 14.15pt; border: none; padding: 0cm 5.4pt; height: 11.05pt; vertical-align: top;">
                    <p style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                        <strong><span style="font-family: 'Times New Roman',serif; color: black;">:</span></strong>
                    </p>
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
                                            Group</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 28.4688px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->ip_group_total }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <span
                                        style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->ip_group_male }}</span>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <span
                                        style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->ip_group_female }}</span>
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
                                        style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->pwd_total }}</span>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <span
                                        style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->pwd_male }}</span>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <span
                                        style="font-size: 11pt; color: #000000; font-family: 'times new roman', times;">{{ $folder->beneficiaries->pwd_female }}</span>
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
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->children_total }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->children_male }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->children_female }}</span>
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
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->youth_total }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->youth_male }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->youth_female }}</span>
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
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->adult_total }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->adult_male }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->adult_female }}</span>
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
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->older_total }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 27.3594px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->older_male }}</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 39.2969px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; vertical-align: top; height: 18px;">
                                    <p
                                        style="margin: 0cm; text-align: left; font-size: 15px; font-family: 'Calibri',sans-serif;">
                                        <span
                                            style="font-size: 11pt; font-family: 'times new roman', times; color: #000000;">{{ $folder->beneficiaries->older_female }}</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 400.2pt;border: none;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
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
    </table>


    {{-- /end beneficiaries --}}




    <!-- Core Program and Sub-program Addressed -->

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td rowspan="3"
                    style="width: 27.9pt;border: none;padding: 0cm 5.4pt;height: 10.4pt;vertical-align: top;">
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

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                </td>
                <td style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project
                                Status</span></strong>
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
                {{-- <td style="width: 84.1pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><span
                            style='font-size:12px;font-family:"Arial",sans-serif;'>{{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox', 'disabled' => 'disabled']) }}
                            Coordinated</span></p>
                </td> --}}
                <td style="width: 84.1pt; border: none; padding: 0cm 5.4pt; vertical-align: top;">
                    <label class="form-check-label" for="coordinated_checkbox" style='font-size:16px;font-family:"Arial",serif;font-weight: normal;
                    '>
                        {{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox', 'disabled' => 'disabled']) }}
                        Coordinated
                    </label>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- /Project Status --}}

    {{-- Project Stakeholders and Address --}}

    <table style="width: 4.8e+2pt;border-collapse:collapse;border:none;">
        <tbody>

            <tr>
                <br>
                <td style="width: 82.8pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>Project Stakeholders and
                                Address</span></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>:</span></strong>
                    </p>
                </td>
                <td style="width: 361.45pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <table
                        style="float: left;width: 100%;border: none;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;">
                        <tbody>
                            <tr>
                                <td
                                    style="width: 24.84%;border: 1pt solid black;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;margin-left:-19.7pt;text-indent:19.7pt;'>
                                        <span style='font-family:"Times New Roman",serif;'>Name</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Office</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Address</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Contact Number</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_name}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_office}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_address}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_number}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_name2}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_office2}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_address2}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_number2}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_name3}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_office3}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_address3}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_number3}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_name4}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_office4}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_address4}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->stakeholders->stakeholder_number4}}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'><span
                            style='font-family:  "Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- /  Project Stakeholders and Address--}}


    {{-- Proponent/s and Address --}}

    <table style="width: 4.8e+2pt;border-collapse:collapse;border:none;">
        <tbody>

            <tr>
                <br>
                <td style="width: 82.8pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>Proponent/s and Address</span></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>:</span></strong>
                    </p>
                </td>
                <td style="width: 361.45pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <table
                        style="float: left;width: 100%;border: none;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;">
                        <tbody>
                            <tr>
                                <td
                                    style="width: 24.84%;border: 1pt solid black;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;margin-left:-19.7pt;text-indent:19.7pt;'>
                                        <span style='font-family:"Times New Roman",serif;'>Name</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Office</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Address</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Contact Number</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_name}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_office}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_address}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_number}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_name2}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_office2}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_address2}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_number2}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_name3}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_office3}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_address3}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_number3}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_name4}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_office4}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_address4}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->proponents->proponent_number4}}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'><span
                            style='font-family:  "Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- /  Project Proponent/s and Address--}}



    <!-- Project Duration -->

    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>11.</span></strong>
                        </p> --}}
                </td>
                <td colspan="2" style="width: 96.95pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong><span
                                style='font-size:12px;font-family:"Arial",sans-serif;'>Project
                                Duration</span></strong>
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
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                    </p>
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
                    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                        <span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span>
                    </p>
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

    {{-- <table style="width: 5.4e+2pt;margin-left:-28.6pt;border-collapse:collapse;border:none;"> --}}
    <table style="width: 100%;margin-left:-28.6pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 27.9pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    {{-- <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>12.</span></strong>
                        </p> --}}
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

    {{-- Implementer and Address --}}

    <table style="width: 4.8e+2pt;border-collapse:collapse;border:none;">
        <tbody>

            <tr>
                <br>
                <td style="width: 82.8pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>Implementer and Address</span></strong>
                    </p>
                </td>
                <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'>
                        <strong><span style='font-family:"Times New Roman",serif;color:black;'>:</span></strong>
                    </p>
                </td>
                <td style="width: 361.45pt;border: none;padding: 0cm 5.4pt;height: 139.5pt;vertical-align: top;">
                    <table
                        style="float: left;width: 100%;border: none;border-collapse:collapse;margin-left:6.75pt;margin-right:6.75pt;">
                        <tbody>
                            <tr>
                                <td
                                    style="width: 24.84%;border: 1pt solid black;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;margin-left:-19.7pt;text-indent:19.7pt;'>
                                        <span style='font-family:"Times New Roman",serif;'>Name</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Office</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Address</span>
                                    </p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:center;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style='font-family:"Times New Roman",serif;'>Contact Number</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_name}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_office}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_address}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_number}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_name2}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_office2}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_address2}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_number2}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_name3}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_office3}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_address3}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_number3}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 24.84%;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_name4}}</p>
                                </td>
                                <td
                                    style="width: 22.36%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_office4}}</p>
                                </td>
                                <td
                                    style="width: 26.24%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_address4}}</p>
                                </td>
                                <td
                                    style="width: 26.56%;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 5pt;height: 1pt;vertical-align: top;">
                                    <p
                                        style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-right:7.1pt;margin-bottom:.0001pt;margin-left:7.1pt;'>
                                        {{$folder->implementers->implementer_number4}}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin:0cm;text-align:left;font-size:15px;font-family:"Calibri",sans-serif;'><span
                            style='font-family:  "Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- / Implementer and Address--}}

    {{-- /End Block --}}

    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tbody>


            <!-- Row for "Background and Rationale" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">II.
                                BACKGROUND AND RATIONALE</span></strong></p>
                </td>
            </tr>

            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->background_and_rationale)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>


            <!-- Row for "Objectives" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">III.
                                OBJECTIVES</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->objectives)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>

            <!-- Row for "Project Description" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">IV.
                                PROJECT DESCRIPTION</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->description)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>

            <!-- Row for "Project Implementation" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">V.
                                PROJECT IMPLEMENTATION</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->project_implementation)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>

            <!-- Row for "Monitoring and Evaluation" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">VI.
                                MONITORING AND EVALUATION</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->monitoring_evaluation)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>

            <!-- Row for "Potential Risks" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">VII.
                                POTENTIAL RISKS</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->potential_risk)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>

            <!-- Row for "Sustainability Plan" -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-size: 11.0pt; font-family: 'Arial',sans-serif; color: black;">VIII.
                                SUSTAINABILITY PLAN</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: justify; text-indent: 36.0pt; text-indent: 0;">
                    <p style="margin-right: 22.0pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">{!! nl2br(e($folder->project->sustainability_plan)) !!}</span>
                    </p>
                    <p style="margin-right: 22.0pt; text-indent: 2.25pt;"><span
                            style="font-size: 11.0pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- <p><strong><span style="font-family:'Arial',sans-serif;color:black;font-size:15px;color:black;">VIII.
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
    </ol> --}}

    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tbody>
            <!-- Row for "Attachments" heading -->
            <tr>
                <td style="border: none;">
                    <p><strong><span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">VIII.
                                ATTACHMENTS</span></strong></p>
                </td>
            </tr>

            <!-- Row for ordered list -->
            <tr>
                <td style="border: none;">
                    <ol style="list-style-type: lower-alpha;">
                        <!-- List item 1 -->
                        <li>
                            <span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">Project
                                Procurement
                                Management Plan (PPMP)– PPF 1a (Annex B)
                                {!! Form::checkbox('ppmp', 'ppmp', old('ppmp', $folder->attachment->ppmp) == 'checked', [
                                    'class' => 'form-check-input',
                                    'id' => 'ppmp_checkbox',
                                    'disabled' => 'disabled',
                                ]) !!}
                            </span>
                        </li>

                        <!-- List item 2 -->
                        <li>
                            <span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">Project
                                Implementation
                                Plan/Gantt Chart – PPF 1b (Annex C)
                                {!! Form::checkbox(
                                    'implementation_plan',
                                    'implementation_plan',
                                    old('implementation_plan', $folder->attachment->implementation_plan) == 'checked',
                                    ['class' => 'form-check-input', 'id' => 'implementation_plan_checkbox', 'disabled' => 'disabled'],
                                ) !!}
                            </span>
                        </li>

                        <!-- List item 3 -->
                        <li>
                            <span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">Summary of
                                Expenditures – PPF 1c (Annex D)
                                {!! Form::checkbox(
                                    'summary_of_expenditures',
                                    'summary_of_expenditures',
                                    old('summary_of_expenditures', $folder->attachment->summary_of_expenditures) == 'checked',
                                    ['class' => 'form-check-input', 'id' => 'summary_of_expenditures_checkbox', 'disabled' => 'disabled'],
                                ) !!}
                            </span>
                        </li>

                        <!-- List item 4 -->
                        <li>
                            <span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">List of
                                Beneficiaries
                                – PPF 1d (Annex E)
                                {!! Form::checkbox(
                                    'list_of_beneficiaries',
                                    'list_of_beneficiaries',
                                    old('list_of_beneficiaries', $folder->attachment->list_of_beneficiaries) == 'checked',
                                    ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries_checkbox', 'disabled' => 'disabled'],
                                ) !!}
                            </span>
                        </li>

                        <!-- List item 5 -->
                        <li>
                            <span style="font-family:'Arial',sans-serif;font-size:15px;color:black;">Other attachments
                                –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity
                                    map for
                                    Infrastructure, Return of Investments for livelihood and other similar projects
                                    {!! Form::checkbox(
                                        'other_attachments',
                                        'other_attachments',
                                        old('other_attachments', $folder->attachment->other_attachments) == 'checked',
                                        ['class' => 'form-check-input', 'id' => 'other_attachments_checkbox', 'disabled' => 'disabled'],
                                    ) !!}
                                </span>
                            </span>
                        </li>
                    </ol>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- Signatures Checklist --}}


    <div align="center" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
        <table style="width: 5.2e+2pt;border-collapse:collapse;border:none;">
            <tbody>
                <tr class="row-spacing">
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
                                style='font-family:"Arial",sans-serif;color:black;'>Prepared by:</span>
                        </p>
                    </td>
                    <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
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
                                style='font-family:"Arial",sans-serif;color:black;'>Evaluated by:</span>
                        </p>
                    </td>
                    <td style="width: 14.2pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
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
                                by:</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 162.8pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span
                                style='font-family:"Arial",sans-serif;color:black;'>{{ old('prepared_by_input', $folder->signature->prepared_by_input) }}</span>
                        </p>
                    </td>
                    <td style="width: 14.15pt;border: none;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
                    </td>
                    <td
                        style="width: 6cm;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span
                                style='font-family:"Arial",sans-serif;color:black;'>{{ old('evaluated_by_input', $folder->signature->evaluated_by_input) }}</span>
                        </p>
                    </td>
                    <td style="width: 14.2pt;border: none;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
                    </td>
                    <td
                        style="width: 163pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 40.1pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span
                                style='font-family:"Arial",sans-serif;color:black;'>{{ old('confirmed_by_input', $folder->signature->confirmed_by_input) }}</span>
                        </p>
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
                                    Officer</span></strong>
                        </p>
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
                                    Leader/Elder</span></strong>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
    <div align="center" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
        <table style="width: 4.8e+2pt;border-collapse:collapse;border:none;" class="custom-font-size">
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
                                style='font-family:"Arial",sans-serif;color:black;'>Validated by:</span>
                        </p>
                    </td>
                    <td style="width: 109.15pt;border: none;padding: 0cm 5.4pt;height: 18.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
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
                                style='font-family:"Arial",sans-serif;color:black;'>Endorsed by:</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 180pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span
                                style='font-family:"Arial",sans-serif;color:black;'>{{ old('validated_by_input', $folder->signature->validated_by_input) }}</span>
                        </p>
                    </td>
                    <td style="width: 109.15pt;border: none;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span style='font-family:"Arial",sans-serif;color:black;'>&nbsp;</span>
                        </p>
                    </td>
                    <td
                        style="width: 186.9pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.8pt;vertical-align: bottom;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
                            <span
                                style='font-family:"Arial",sans-serif;color:black;'>{{ old('endorsed_by_input', $folder->signature->endorsed_by_input) }}</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 180pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                            <strong><span style='font-family:"Arial",sans-serif;color:black;'>Regional
                                    Staff</span></strong>
                        </p>
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
                                    Director</span></strong>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'><span
            style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
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
                            style='font-family:"Arial",sans-serif;color:black;'>Recommending approval:</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 231.45pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.1pt;vertical-align: bottom;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span
                            style='font-family:"Arial",sans-serif;color:black;'>{{ old('recommended_by_input', $folder->signature->recommended_by_input) }}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 231.45pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <strong><span style='font-family:"Arial",sans-serif;color:black;'>Executive
                                Director</span></strong>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;border:none;'>
        <strong><span style='font-size:15px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></strong>
    </p>
    <table style="width: 1.6e+2pt;margin-left:161.4pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr style="margin-bottom: 25px">
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
                            style='font-family:"Arial",sans-serif;color:black;'>Approved:</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 160.55pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm 5.4pt;height: 37.5pt;vertical-align: bottom;">
                    <p
                        style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:-14.4pt;text-align:center;border:none;'>
                        <span
                            style='font-family:"Arial",sans-serif;color:black;'>{{ old('approved_by_input', $folder->signature->approved_by_input) }}</span>
                    </p>
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


@section('javascript')
    <script>
        $(document).ready(function() {
            function updateCheckboxes() {
                $('.print-content input[type="checkbox"]').each(function() {
                    const checkbox = $(this);
                    const isChecked = checkbox.is(':checked');
                    const checkmark = isChecked ? '✓' : '';

                    // Create a <span> element to hold the checkmark symbol
                    const checkmarkSpan = $('<span>').text(checkmark);

                    // Remove any existing checkmark span if present
                    checkbox.next('.checkmark').remove();

                    // Hide the checkbox
                    checkbox.css('display', 'none');

                    // Add the new checkmark span after the checkbox
                    checkbox.after(checkmarkSpan.addClass('checkmark'));
                });
            }

            // Call the function to update checkboxes when the page is loaded
            updateCheckboxes();

            // Add event listener to update checkboxes when any checkbox is clicked
            $('input[type="checkbox"]').on('change', function() {
                updateCheckboxes();
            });
        });

        fetch('/get-regions-dropdown')
            .then(response => response.json())
            .then(data => {
                // Find all elements with the name attribute 'region'
                let regionElements = $('[name="region"]');

                // Loop through each element and set its text content to the name of the region
                regionElements.each(function() {
                    let regionCode = $(this).text().trim(); // Trim any whitespace
                    if (data.hasOwnProperty(regionCode)) {
                        $(this).text(data[regionCode]);
                    }
                });
            });

        var provinceCode = $('#provinceSpan').text().trim();
        $.ajax({
            url: '/getProvinceName/' + provinceCode,

            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.provinceName) {
                    $('#provinceSpan').text(response.provinceName);
                    console.log("provinceCode: " + provinceCode);
                    console.log("province name: " + response.provinceName);
                } else {
                    $('#provinceSpan').text('Province not found');
                    console.log("provinceCode: " + provinceCode);
                }
            },
            error: function() {
                // $('#provinceSpan').text('Error fetching data');
                // blank instead of error message
                $('#provinceSpan').text('');
            }
        });

        var cityCode = $('#citySpan').text().trim();

        $.ajax({
            url: '/getCityName/' + cityCode, // Update URL for city name request
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.cityName) {
                    $('#citySpan').text(response.cityName); // Update appropriate span for city
                } else {
                    $('#citySpan').text('City not found');
                }
            },
            error: function() {
                // $('#citySpan').text('Error fetching data');
                // blank instead of error message
                $('#provinceSpan').text('');
            }
        });

        var barangayCode = $('#barangaySpan').text().trim();

        console.log("barangayCode: " + barangayCode);

        $.ajax({
            url: '/getBarangayName/' + barangayCode, // Update URL for city name request
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.barangayCode) {
                    $('#barangaySpan').text(response.barangayCode); // Update appropriate span for city
                } else {
                    $('#barangaySpan').text('Barangay not found');
                }
            },
            error: function() {
                // $('#barangaySpan').text('Error fetching data');
                // blank instead of error message
                $('#provinceSpan').text('');
            }
        });
    </script>
@endsection
