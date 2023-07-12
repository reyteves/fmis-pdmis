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
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .print-content h4 {
            font-size: 14px;
            font-weight: bold;
            margin: 10px 0;
        }

        .print-content div {
            margin-bottom: 10px;
            font-size: 12px;
        }

        .print-content .text-right {
            text-align: right;
        }

    }


    @media not print {

        .print-content h4 {
            font-size: 14px;
            font-weight: bold;
            margin: 10px 0;
        }

        .print-content div {
            margin-bottom: 10px;
            font-size: 12px;
        }

        .print-content .text-right {
            text-align: right;
        }

    }
</style>



<div class="print-content">

    <div style="text-align: center;">
        <label>PROJECT PROPOSAL FORMAT</label>
    </div>

    <div>
        <h4>Project Title: </h4>{{ $folder->project->name }}
    </div>

    {{-- Project Site --}}

    <h4>Project Site</h4>

    <table>
        <tr>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                    <div><strong>Sitio:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                    <div>{!! nl2br($folder->site->street_address) !!}</div>
                </div>
            </td>
            {{-- </tr>
        <tr> --}}
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Barangay:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->barangay) !!}</div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Municipality:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->municipality) !!}</div>
                </div>
            </td>
            {{-- </tr>
        <tr> --}}
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Congressional District:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->congressional_district) !!}</div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Province:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->province) !!}</div>
                </div>
            </td>
            {{-- </tr>
        <tr> --}}
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Region:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->region) !!}</div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>CADT/CALT Petition No.:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->cadt_calt) !!}</div>
                </div>
            </td>
            {{-- </tr>
        <tr> --}}
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div><strong>Name of AD:</strong></div>
                </div>
            </td>
            <td>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div>{!! nl2br($folder->site->ad_name) !!}</div>
                </div>
            </td>
        </tr>
    </table>

    <!-- Project Basis -->
    <table>
        <tr>
            <td>
                <label for="project_basis">Project Basis:</label> {{ $folder->budget->project_basis }}
            </td>

        </tr>
    </table>
    <!-- /Project Basis -->


    <!-- /Project Cost -->
    <table>
        <tr>
            <td>
                <label for="total_project_cost" style="padding-right: 10px;">Total Project Cost:</label>
                {{ $folder->budget->total_project_cost }}
            </td>
        </tr>
        <tr>
            <td>
                <label for="direct_cost" style="padding-right: 10px; padding-left: 30px;">Direct Cost:</label>
                {{ $folder->budget->direct_cost }}
            </td>
        </tr>
        <tr>
            <td>
                <label for="indirect_cost" style="padding-right: 10px; padding-left: 30px;">Indirect Cost:</label>
                {{ $folder->budget->indirect_cost }}
            </td>
        </tr>
    </table>


    <br>

    <!-- Source of Fund and Budget Year -->
    <table style="margin-bottom: 15px;">
        <tr>
            <td>
                <label for="source_of_fund" style="padding-right: 10px;">Source of Fund:</label>
                {{ $folder->budget->source_of_fund }}
            </td>
        </tr>
        <tr>
            <td>
                <label for="budget_year" style="padding-right: 10px; padding-left: 30px;">Budget Year:</label>
                {{ $folder->budget->budget_year }}
            </td>
        </tr>
    </table>
    <!-- /Source of Fund and Budget Year -->


    <!-- Core Program and Sub-program Addressed -->
    <div class="row">
        <div class="col-md-6">
            <label for="core_program" style="text-align: right;">Core Program and Sub-program Addressed:</label>
            {{ $folder->budget->core_program }} / {{ $folder->budget->sub_program }}
        </div>
    </div>
    <!-- /Core Program and Sub-program Addressed -->

    <div style="margin-bottom: 15px; padding-top: 15px;">
        <div style="display: flex;">
            <label for="project_status" style="display: block;">Project Status:</label>
            <br>
        </div>
        <div id="project_status">
            <div style="display: inline-block; margin-bottom: 10px; width: 16.66%;">
                {{ Form::checkbox('project_status[]', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_checkbox', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="proposed_checkbox">Proposed</label>
            </div>
            <div style="display: inline-block; margin-bottom: 10px; width: 16.66%;">
                {{ Form::checkbox('project_status[]', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_checkbox', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="on-going_checkbox">On-going</label>
            </div>
            <div style="display: inline-block; margin-bottom: 10px; width: 16.66%;">
                {{ Form::checkbox('project_status[]', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_checkbox', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="continuing_checkbox">Continuing</label>
            </div>
            <div style="display: inline-block; margin-bottom: 10px; width: 16.66%;">
                {{ Form::checkbox('project_status[]', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_checkbox', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="terminating_checkbox">Terminating</label>
            </div>
            <div style="display: inline-block; margin-bottom: 10px; width: 16.66%;">
                {{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="coordinated_checkbox">Coordinated</label>
            </div>
        </div>
    </div>



    <!-- Mode of Implementation -->

    <label for="implementation_mode" style="display: block;">Implementation Mode</label>
    <div style="margin-bottom: 15px;" id="implementation_mode">
        <div style="display: inline-block; width: 33.33%;">
            <div style="display: inline-block;">
                {{ Form::checkbox('implementation_mode', 'by-administration', $folder->budget->implementation_mode == 'by-administration', ['class' => 'form-check-input', 'id' => 'by-administration', 'checked' => $folder->budget->implementation_mode == 'by-administration', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="by-administration">
                    By Administration
                </label>
            </div>
        </div>
        <div style="display: inline-block; width: 33.33%;">
            <div style="display: inline-block;">
                {{ Form::checkbox('implementation_mode', 'by-contract', $folder->budget->implementation_mode == 'by-contract', ['class' => 'form-check-input', 'id' => 'by-contract', 'checked' => $folder->budget->implementation_mode == 'by-contract', 'disabled' => 'disabled']) }}
                <label style="display: inline-block;" for="by-contract">
                    By Contract
                </label>
            </div>
        </div>
    </div>


    <!-- /Mode of Implementation - Form 2 -->


    <div class="row">
        <div class="col-xs-12">
            <h4>Background and Rationale</h4>
            <div>{!! nl2br(e($folder->project->background_and_rationale)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Objectives</h4>
            <div>{!! nl2br(e($folder->project->objectives)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Project Description</h4>
            <div>{!! nl2br(e($folder->project->description)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Project Implementation</h4>
            <div>{!! nl2br(e($folder->project->project_implementation)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Monitoring and Evaluation</h4>
            <div>{!! nl2br(e($folder->project->monitoring_evaluation)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Potential Risk</h4>
            <div>{!! nl2br(e($folder->project->potential_risk)) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h4>Sustainability Plan</h4>
            <div>{!! nl2br(e($folder->project->sustainability_plan)) !!}</div>
        </div>
    </div>






    <!-- Project Duration -->
    <div class="row mb-3">
        <div class="col-md-6 col-lg-6 col-xl-6">
            <label for="target_date_start" class="col-form-label text-md-end">Target Date of Start</label>
            <div>{{ $folder->budget->target_date_start }}</div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <label for="target_date_completion" class="col-form-label text-md-end">Target Date of Completion</label>
            <div>{{ $folder->budget->target_date_completion }}</div>
        </div>
    </div>
    <!-- /Project Duration -->


    <label for="attachments">Attachments</label>

    <div class="form-check">
        {!! Form::checkbox('ppmp', 'ppmp', old('ppmp', $folder->attachment->ppmp) == 'checked', [
            'class' => 'form-check-input',
            'id' => 'ppmp_checkbox',
            'disabled' => 'disabled',
        ]) !!}
        {!! Form::label('ppmp_checkbox', 'Project Procurement Management Plan (PPMP)– PPF 1a (Annex B)', [
            'class' => 'form-check-label',
        ]) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox(
            'implementation_plan',
            'implementation_plan',
            old('implementation_plan', $folder->attachment->implementation_plan) == 'checked',
            ['class' => 'form-check-input', 'id' => 'implementation_plan_checkbox', 'disabled' => 'disabled'],
        ) !!}
        {!! Form::label('implementation_plan_checkbox', 'Project Implementation Plan/Gantt Chart – PPF 1b (Annex C)', [
            'class' => 'form-check-label',
        ]) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox(
            'summary_of_expenditures',
            'summary_of_expenditures',
            old('summary_of_expenditures', $folder->attachment->summary_of_expenditures) == 'checked',
            ['class' => 'form-check-input', 'id' => 'summary_of_expenditures_checkbox', 'disabled' => 'disabled'],
        ) !!}
        {!! Form::label('summary_of_expenditures_checkbox', 'Summary of Expenditures – PPF 1c (Annex D)', [
            'class' => 'form-check-label',
        ]) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox(
            'list_of_beneficiaries',
            'list_of_beneficiaries',
            old('list_of_beneficiaries', $folder->attachment->list_of_beneficiaries) == 'checked',
            ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries_checkbox', 'disabled' => 'disabled'],
        ) !!}
        {!! Form::label('list_of_beneficiaries_checkbox', 'List of Beneficiaries – PPF 1d (Annex E)', [
            'class' => 'form-check-label',
        ]) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox(
            'other_attachments',
            'other_attachments',
            old('other_attachments', $folder->attachment->other_attachments) == 'checked',
            ['class' => 'form-check-input', 'id' => 'other_attachments_checkbox', 'disabled' => 'disabled'],
        ) !!}
        {!! Form::label(
            'other_attachments_checkbox',
            'Other attachments –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity map for Infrastructure, Return of Investments for livelihood and other similar projects</span>',
            ['class' => 'form-check-label'],
            false,
        ) !!}
    </div>

    <label for="signatures">Signatures</label>

{{-- Signatures Checklist --}}
<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'prepared_by_checkbox[]',
                'Prepared by: CSC Staff',
                old('prepared_by_checkbox', $folder->signature->prepared_by_checkbox) == 'checked',
                ['id' => 'prepared_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Prepared by: CSC Staff</label>
            <div>{{ old('prepared_by_input', $folder->signature->prepared_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'evaluated_by_checkbox[]',
                'Evaluated by: Provincial Officer',
                old('evaluated_by_checkbox', $folder->signature->evaluated_by_checkbox) == 'checked',
                ['id' => 'evaluated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Evaluated by: Provincial Officer</label>
            <div>{{ old('evaluated_by_input', $folder->signature->evaluated_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'confirmed_by_checkbox[]',
                'Confirmed by: IPS/IPO Heads/IP Leader/Elder',
                old('confirmed_by_checkbox', $folder->signature->confirmed_by_checkbox) == 'checked',
                ['id' => 'confirmed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Confirmed by: IPS/IPO Heads/IP Leader/Elder</label>
            <div>{{ old('confirmed_by_input', $folder->signature->confirmed_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'validated_by_checkbox[]',
                'Validated by: Regional Staff',
                old('validated_by_checkbox', $folder->signature->validated_by_checkbox) == 'checked',
                ['id' => 'validated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Validated by: Regional Staff</label>
            <div>{{ old('validated_by_input', $folder->signature->validated_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'endorsed_by_checkbox[]',
                'Endorsed by: Regional Director',
                old('endorsed_by_checkbox', $folder->signature->endorsed_by_checkbox) == 'checked',
                ['id' => 'endorsed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Endorsed by: Regional Director</label>
            <div>{{ old('endorsed_by_input', $folder->signature->endorsed_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'recommended_by_checkbox[]',
                'Recommending Approval: Executive Director',
                old('recommended_by_checkbox', $folder->signature->recommended_by_checkbox) == 'checked',
                ['id' => 'recommended_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Recommending Approval: Executive Director</label>
            <div>{{ old('recommended_by_input', $folder->signature->recommended_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox(
                'approved_by_checkbox[]',
                'Approved by: Chairperson',
                old('approved_by_checkbox', $folder->signature->approved_by_checkbox) == 'checked',
                ['id' => 'approved_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled'],
            ) !!}
            <label class="form-check-label">Approved by: Chairperson</label>
            <div>{{ old('approved_by_input', $folder->signature->approved_by_input) }}</div>
        </div>
    </div>
</div>
{{-- /Signatures Checklist --}}

    {{-- End Printable Page --}}
</div>

<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div>
