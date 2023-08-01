{{-- Project Status --}}
<div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'proposed', old('project_status', $folder->budget->project_status) == 'proposed', ['class' => 'form-check-input', 'id' => 'proposed']) }}
                <label class="form-check-label" for="proposed">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'on-going', old('project_status', $folder->budget->project_status) == 'on-going', ['class' => 'form-check-input', 'id' => 'on-going']) }}
                <label class="form-check-label" for="on-going">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'continuing', old('project_status', $folder->budget->project_status) == 'continuing', ['class' => 'form-check-input', 'id' => 'continuing']) }}
                <label class="form-check-label" for="continuing">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'terminating', old('project_status', $folder->budget->project_status) == 'terminating', ['class' => 'form-check-input', 'id' => 'terminating']) }}
                <label class="form-check-label" for="terminating">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'coordinated', old('project_status', $folder->budget->project_status) == 'coordinated', ['class' => 'form-check-input', 'id' => 'coordinated']) }}
                <label class="form-check-label" for="coordinated">Coordinated</label>
            </div>
        </div>
    </div>
</div>
{{-- /Project Status --}}

<br>


<label for="attachments">Attachments</label>

<div class="form-check">
    {!! Form::checkbox('ppmp', 'ppmp', old('ppmp', $folder->attachment->ppmp) == 'checked', [
        'class' => 'form-check-input',
        'id' => 'ppmp',
    ]) !!}
    {!! Form::label('ppmp', 'Project Procurement Management Plan (PPMP)– PPF 1a (Annex B)', [
        'class' => 'form-check-label',
    ]) !!}
</div>
<div class="form-check">
    {!! Form::checkbox(
        'implementation_plan',
        'implementation_plan',
        old('implementation_plan', $folder->attachment->implementation_plan) == 'checked',
        ['class' => 'form-check-input', 'id' => 'implementation_plan'],
    ) !!}
    {!! Form::label('implementation_plan', 'Project Implementation Plan/Gantt Chart – PPF 1b (Annex C)', [
        'class' => 'form-check-label',
    ]) !!}
</div>
<div class="form-check">
    {!! Form::checkbox(
        'summary_of_expenditures',
        'summary_of_expenditures',
        old('summary_of_expenditures', $folder->attachment->summary_of_expenditures) == 'checked',
        ['class' => 'form-check-input', 'id' => 'summary_of_expenditures'],
    ) !!}
    {!! Form::label('summary_of_expenditures', 'Summary of Expenditures – PPF 1c (Annex D)', [
        'class' => 'form-check-label',
    ]) !!}
</div>
<div class="form-check">
    {!! Form::checkbox(
        'list_of_beneficiaries',
        'list_of_beneficiaries',
        old('list_of_beneficiaries', $folder->attachment->list_of_beneficiaries) == 'checked',
        ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries'],
    ) !!}
    {!! Form::label('list_of_beneficiaries', 'List of Beneficiaries – PPF 1d (Annex E)', [
        'class' => 'form-check-label',
    ]) !!}
</div>
<div class="form-check">
    {!! Form::checkbox(
        'other_attachments',
        'other_attachments',
        old('other_attachments', $folder->attachment->other_attachments) == 'checked',
        ['class' => 'form-check-input', 'id' => 'other_attachments'],
    ) !!}
    {!! Form::label(
        'other_attachments',
        'Other attachments –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity map for Infrastructure, Return of Investments for livelihood and other similar projects</span>',
        ['class' => 'form-check-label'],
        false,
    ) !!}
</div>
