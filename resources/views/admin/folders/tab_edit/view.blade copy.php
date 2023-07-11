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

        /* .print-content .row {
            margin-bottom: 20px;
        } */

        /* .print-content .col-xs-12 {
            width: 100%;
        } */

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

        /* .print-content .row {
            margin-bottom: 20px;
        } */

        /* .print-content .col-xs-12 {
            width: 100%;
        } */


        .print-content .text-right {
            text-align: right;
        }

    }
</style>

<div class="print-content">
    <h4>Project Title: {{ $folder->project->name }}</h4>

    <div class="row">
        <div class="col-xs-12">
            <h4>Project Description</h4>
            <div>{!! nl2br(e($folder->project->description)) !!}</div>
        </div>
    </div>

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

    <div class="row">
        <div class="col-xs-12">
            <h4>Project Description</h4>
            <div>{{ $folder->project->description }}</div>
        </div>
    </div>

    <h4>Project Site</h4>

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 mb-3">
            <div>Sitio: {!! nl2br($folder->site->street_address) !!}</div>
        </div>



        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Barangay: {!! nl2br($folder->site->barangay) !!}</div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Municipality: {!! nl2br($folder->site->municipality) !!}</div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Congressional District: {!! nl2br($folder->site->congressional_district) !!}</div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Province: {!! nl2br($folder->site->province) !!}</div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Region: {!! nl2br($folder->site->region) !!}</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>CADT/CALT Petition No.: {!! nl2br($folder->site->cadt_calt) !!}</div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div>Name of AD: {!! nl2br($folder->site->ad_name) !!}</div>
        </div>
    </div>

    <!-- Project Description -->
    <div class="row">
        <div class="col-xs-12">
            <h4>Project Description</h4>
            <div>{!! nl2br(e($folder->project->description)) !!}</div>
        </div>
    </div>

    <!-- Project Status -->
    {{-- <div class="row mb-3 pt-3">
        <div class="col-md-12">
            <label for="project_status" class="d-block">Project Status:</label>
            <br>
            <div class="form-group" id="project_status">
                <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <input type="radio" name="project_status" value="proposed"
                        {{ old('project_status', $folder->budget->project_status) == 'proposed' ? 'checked' : '' }}
                        disabled>
                    <label class="form-check-label" for="proposed">Proposed</label>
                </div>
                <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <input type="radio" name="project_status" value="on-going"
                        {{ old('project_status', $folder->budget->project_status) == 'on-going' ? 'checked' : '' }}
                        disabled>
                    <label class="form-check-label" for="on-going">On-going</label>
                </div>
                <!-- Add the remaining radio buttons for project status here -->
            </div>
        </div>
    </div> --}}
    <!-- /Project Status -->

    {{-- Project Status --}}

{{-- <div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_radio']) }}
                <label class="form-check-label" for="proposed_radio">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_radio']) }}
                <label class="form-check-label" for="on-going_radio">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_radio']) }}
                <label class="form-check-label" for="continuing_radio">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_radio']) }}
                <label class="form-check-label" for="terminating_radio">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_radio']) }}
                <label class="form-check-label" for="coordinated_radio">Coordinated</label>
            </div>
        </div>
    </div>
</div> --}}
{{-- /Project Status --}}

{{-- Project Status --}}
{{-- <div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_radio']) }}
                <label class="form-check-label" for="proposed_radio">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_radio']) }}
                <label class="form-check-label" for="on-going_radio">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_radio']) }}
                <label class="form-check-label" for="continuing_radio">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_radio']) }}
                <label class="form-check-label" for="terminating_radio">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_radio']) }}
                <label class="form-check-label" for="coordinated_radio">Coordinated</label>
            </div>
        </div>
    </div>
</div> --}}
{{-- /Project Status --}}

{{-- Project Status --}}
{{-- <div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_checkbox']) }}
                <label class="form-check-label" for="proposed_checkbox">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_checkbox']) }}
                <label class="form-check-label" for="on-going_checkbox">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_checkbox']) }}
                <label class="form-check-label" for="continuing_checkbox">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_checkbox']) }}
                <label class="form-check-label" for="terminating_checkbox">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox']) }}
                <label class="form-check-label" for="coordinated_checkbox">Coordinated</label>
            </div>
        </div>
    </div>
</div> --}}

{{-- /Project Status --}}

<div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed_checkbox', 'disabled' => 'disabled']) }}
                <label class="form-check-label" for="proposed_checkbox">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going_checkbox', 'disabled' => 'disabled']) }}
                <label class="form-check-label" for="on-going_checkbox">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing_checkbox', 'disabled' => 'disabled']) }}
                <label class="form-check-label" for="continuing_checkbox">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating_checkbox', 'disabled' => 'disabled']) }}
                <label class="form-check-label" for="terminating_checkbox">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::checkbox('project_status[]', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated_checkbox', 'disabled' => 'disabled']) }}
                <label class="form-check-label" for="coordinated_checkbox">Coordinated</label>
            </div>
        </div>
    </div>
</div>




<!-- Mode of Implementation - Form 2 -->

<label for="implementation_mode">Implementation Mode</label>

<div class="row mb-3 form-group" id="implementation_mode_2">
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::checkbox('implementation_mode_2[]', 'by-administration', $folder->budget->implementation_mode == 'by-administration', ['class' => 'form-check-input disabled', 'id' => 'by-administration_2', 'checked' => $folder->budget->implementation_mode == 'by-administration', 'disabled' => 'disabled']) }}
            <label class="form-check-label" for="by-administration_2">
                By Administration
            </label>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::checkbox('implementation_mode_2[]', 'by-contract', $folder->budget->implementation_mode == 'by-contract', ['class' => 'form-check-input disabled', 'id' => 'by-contract_2', 'checked' => $folder->budget->implementation_mode == 'by-contract', 'disabled' => 'disabled']) }}
            <label class="form-check-label" for="by-contract_2">
                By Contract
            </label>
        </div>
    </div>
</div>


<!-- /Mode of Implementation - Form 2 -->

    <!-- Project Basis -->
<div class="row mb-3">
    <div class="col-md-8">
        <label for="project_basis">Project Basis</label>
        <div>{{ $folder->budget->project_basis }}</div>
    </div>
</div>
<!-- /Project Basis -->

<!-- Project Cost -->
<div class="row mb-3">
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="total_project_cost" class="col-form-label text-md-end">Total Project Cost</label>
        <div>{{ $folder->budget->total_project_cost }}</div>
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="direct_cost" class="col-form-label text-md-end">Direct Cost</label>
        <div>{{ $folder->budget->direct_cost }}</div>
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="indirect_cost" class="col-form-label text-md-end">Indirect Cost</label>
        <div>{{ $folder->budget->indirect_cost }}</div>
    </div>
</div>
<!-- /Project Cost -->

<!-- Source of Fund and Budget Year -->
<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="source_of_fund" class="col-form-label text-md-end">Source of Fund</label>
        <div>{{ $folder->budget->source_of_fund }}</div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="budget_year" class="col-form-label text-md-end">Budget Year</label>
        <div>{{ $folder->budget->budget_year }}</div>
    </div>
</div>
<!-- /Source of Fund and Budget Year -->

<!-- Core and Sub Core Program Addressed -->
<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="core_program" class="col-form-label text-md-end">Core Program Addressed:</label>
            <div>{{ $folder->budget->core_program }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sub_program" class="col-form-label text-md-end">Sub-program Addressed:</label>
            <div>{{ $folder->budget->sub_program }}</div>
        </div>
    </div>
</div>
<!-- /Core and Sub Core Program Addressed -->

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
        ['class' => 'form-check-input', 'id' => 'implementation_plan_checkbox', 'disabled' => 'disabled']
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
        ['class' => 'form-check-input', 'id' => 'summary_of_expenditures_checkbox', 'disabled' => 'disabled']
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
        ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries_checkbox', 'disabled' => 'disabled']
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
        ['class' => 'form-check-input', 'id' => 'other_attachments_checkbox', 'disabled' => 'disabled']
    ) !!}
    {!! Form::label(
        'other_attachments_checkbox',
        'Other attachments –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity map for Infrastructure, Return of Investments for livelihood and other similar projects</span>',
        ['class' => 'form-check-label'],
        false
    ) !!}
</div>

<label for="signatures">Signatures</label>

{{-- Signatures Checklist --}}
<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            <div><u>{{ $folder->signature->prepared_by_input }}</u></div>
            {!! Form::checkbox('prepared_by_checkbox[]', 'Prepared by: CSC Staff', old('prepared_by_checkbox', $folder->signature->prepared_by_checkbox) == 'checked', ['id' => 'prepared_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('prepared_by_input_{uniqueId}', 'Prepared by: CSC Staff', ['class' => 'form-check-label']) !!}
            {{-- {!! Form::text('prepared_by_input_{uniqueId}', old('prepared_by_input', $folder->signature->prepared_by_input), ['class' => 'form-control', 'placeholder' => 'Name of CSC Staff', 'disabled' => 'disabled']) !!} --}}
          

        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('evaluated_by_checkbox[]', 'Evaluated by: Provincial Officer', old('evaluated_by_checkbox', $folder->signature->evaluated_by_checkbox) == 'checked', ['id' => 'evaluated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('evaluated_by_input_{uniqueId}', 'Evaluated by: Provincial Officer', ['class' => 'form-check-label']) !!}
            {!! Form::text('evaluated_by_input_{uniqueId}', old('evaluated_by_input', $folder->signature->evaluated_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Provincial Officer', 'disabled' => 'disabled']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('confirmed_by_checkbox[]', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', old('confirmed_by_checkbox', $folder->signature->confirmed_by_checkbox) == 'checked', ['id' => 'confirmed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('confirmed_by_input_{uniqueId}', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', ['class' => 'form-check-label']) !!}
            {!! Form::text('confirmed_by_input_{uniqueId}', old('confirmed_by_input', $folder->signature->confirmed_by_input), ['class' => 'form-control', 'placeholder' => 'Name of IPS/IPO Heads/IP Leader/Elder', 'disabled' => 'disabled']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('validated_by_checkbox[]', 'Validated by: Regional Staff', old('validated_by_checkbox', $folder->signature->validated_by_checkbox) == 'checked', ['id' => 'validated_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('validated_by_input_{uniqueId}', 'Validated by: Regional Staff', ['class' => 'form-check-label']) !!}
            {!! Form::text('validated_by_input_{uniqueId}', old('validated_by_input', $folder->signature->validated_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Regional Staff', 'disabled' => 'disabled']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('endorsed_by_checkbox[]', 'Endorsed by: Regional Director', old('endorsed_by_checkbox', $folder->signature->endorsed_by_checkbox) == 'checked', ['id' => 'endorsed_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('endorsed_by_input_{uniqueId}', 'Endorsed by: Regional Director', ['class' => 'form-check-label']) !!}
            {!! Form::text('endorsed_by_input_{uniqueId}', old('endorsed_by_input', $folder->signature->endorsed_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Regional Director', 'disabled' => 'disabled']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('recommended_by_checkbox[]', 'Recommending Approval: Executive Director', old('recommended_by_checkbox', $folder->signature->recommended_by_checkbox) == 'checked', ['id' => 'recommended_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('recommended_by_input_{uniqueId}', 'Recommending Approval: Executive Director', ['class' => 'form-check-label']) !!}
            {!! Form::text('recommended_by_input_{uniqueId}', old('recommended_by_input', $folder->signature->recommended_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Executive Director', 'disabled' => 'disabled']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('approved_by_checkbox[]', 'Approved by: Chairperson', old('approved_by_checkbox', $folder->signature->approved_by_checkbox) == 'checked', ['id' => 'approved_by_checkbox_{uniqueId}', 'class' => 'form-check-input', 'disabled' => 'disabled']) !!}
            {!! Form::label('approved_by_input_{uniqueId}', 'Approved by: Chairperson', ['class' => 'form-check-label']) !!}
            {!! Form::text('approved_by_input_{uniqueId}', old('approved_by_input', $folder->signature->approved_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Chairperson', 'disabled' => 'disabled']) !!}
        </div>
    </div>
</div>
{{-- /Signatures Checklist --}}

<label for="signatures">Signatures</label>

{{-- Signatures Checklist --}}
{{-- <div class="form-row">
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Prepared by: CSC Staff</label>
            <div>{{ old('prepared_by_input', $folder->signature->prepared_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Evaluated by: Provincial Officer</label>
            <div>{{ old('evaluated_by_input', $folder->signature->evaluated_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Confirmed by: IPS/IPO Heads/IP Leader/Elder</label>
            <div>{{ old('confirmed_by_input', $folder->signature->confirmed_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Validated by: Regional Staff</label>
            <div>{{ old('validated_by_input', $folder->signature->validated_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Endorsed by: Regional Director</label>
            <div>{{ old('endorsed_by_input', $folder->signature->endorsed_by_input) }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Recommending Approval: Executive Director</label>
            <div>{{ old('recommended_by_input', $folder->signature->recommended_by_input) }}</div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">Approved by: Chairperson</label>
            <div>{{ old('approved_by_input', $folder->signature->approved_by_input) }}</div>
        </div>
    </div>
</div> --}}
{{-- /Signatures Checklist --}}




    {{-- End Printable Page --}}
</div>

<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div>
