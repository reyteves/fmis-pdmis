<style>
    .custom-font-style {
        font-family: "Calibri", sans-serif;
    }
</style>

<div class="custom-font-style">

<br>
<label for="implementation_mode">Implementation Mode</label>
<div class="row mb-3 form-group" id="implementation_mode">
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-administration', $folder->budget->implementation_mode == 'by-administration', ['class' => 'form-check-input', 'id' => 'by-administration', 'checked' => $folder->budget->implementation_mode == 'by-administration']) }}
            <label class="form-check-label" for="by-administration">
                By Administration
            </label>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-contract', $folder->budget->implementation_mode == 'by-contract', ['class' => 'form-check-input', 'id' => 'by-contract', 'checked' => $folder->budget->implementation_mode == 'by-contract']) }}
            <label class="form-check-label" for="by-contract">
                By Contract
            </label>
        </div>
    </div>
</div>






{{-- <div class="row mb-3 form-group" id="implementation_mode">
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-administration', $folder->budget->implementation_mode == 'by-administration', ['class' => 'form-check-input', 'id' => 'by-administration', 'checked' => $folder->budget->implementation_mode == 'by-administration']) }}
            <label class="form-check-label ml-2" for="by-administration">
                By Administration
            </label>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-contract', $folder->budget->implementation_mode == 'by-contract', ['class' => 'form-check-input', 'id' => 'by-contract', 'checked' => $folder->budget->implementation_mode == 'by-contract']) }}
            <label class="form-check-label ml-2" for="by-contract">
                By Contract
            </label>
        </div>
    </div>
</div> --}}






<script>
    var implementationMode = '{{ $folder->budget->implementation_mode }}';
    console.log(implementationMode);
</script>


<br>

{{-- project basis --}}

<div class="row mb-3">
    <div class="col-md-8">
        <label for="project_basis">Project Basis</label>
        {{ Form::text('project_basis', old('project_basis', $folder->budget->project_basis), ['class' => 'form-control', 'id' => 'project_basis']) }}
    </div>
</div>

{{-- /project basis --}}

<br>

{{-- project cost --}}

<div class="row mb-3">
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="total_project_cost" class="col-form-label text-md-end">Total Project Cost</label>
        {{ Form::text('total_project_cost', old('total_project_cost', $folder->budget->total_project_cost), ['class' => 'form-control', 'id' => 'total_project_cost', 'autocomplete' => 'total_project_cost', 'autofocus']) }}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="direct_cost" class="col-form-label text-md-end">Direct Cost</label>
        {{ Form::text('direct_cost', old('direct_cost', $folder->budget->direct_cost), ['class' => 'form-control', 'id' => 'direct_cost', 'autocomplete' => 'direct_cost', 'autofocus']) }}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="indirect_cost" class="col-form-label text-md-end">Indirect Cost</label>
        {{ Form::text('indirect_cost', old('indirect_cost', $folder->budget->indirect_cost), ['class' => 'form-control', 'id' => 'indirect_cost']) }}
    </div>
</div>
{{-- /project cost --}}

<br>

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="source_of_fund" class="col-form-label text-md-end">Source of Fund</label>
        {{ Form::text('source_of_fund', old('source_of_fund', $folder->budget->source_of_fund), ['class' => 'form-control', 'id' => 'source_of_fund', 'autocomplete' => 'source_of_fund', 'autofocus']) }}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="budget_year" class="col-form-label text-md-end">Budget Year</label>
        {{ Form::text('budget_year', old('budget_year', $folder->budget->budget_year), ['class' => 'form-control', 'id' => 'budget_year']) }}
    </div>
</div>

<br>

{{-- Core and Sub Core Program Addressed --}}
<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="core_program" class="col-form-label text-md-end">Core Program Addressed:</label>
            {{ Form::text('core_program', old('core_program', $folder->budget->core_program), ['class' => 'form-control', 'id' => 'core_program', 'placeholder' => 'Enter core program addressed']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sub_program" class="col-form-label text-md-end">Sub-program Addressed:</label>
            {{ Form::text('sub_program', old('sub_program', $folder->budget->sub_program), ['class' => 'form-control', 'id' => 'sub_program', 'placeholder' => 'Enter sub-program addressed']) }}
        </div>
    </div>
</div>


{{-- /Core and Sub Core Program Addressed --}}

<br>

{{-- Project Duration --}}

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_start" class="col-form-label text-md-end">Target Date of Start</label>
        {{ Form::date('target_date_start', old('target_date_start', $folder->budget->target_date_start), ['class' => 'form-control', 'id' => 'target_date_start']) }}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_completion" class="col-form-label text-md-end">Target Date of Completion</label>
        {{ Form::date('target_date_completion', old('target_date_completion', $folder->budget->target_date_completion), ['class' => 'form-control', 'id' => 'target_date_completion']) }}
    </div>
</div>

{{-- /Project Duration --}}

</div>
