<br>

{{-- Project Status --}}
<div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'proposed', false, ['class' => 'form-check-input', 'id' => 'proposed']) }}
                <label class="form-check-label" for="proposed">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'on-going', false, ['class' => 'form-check-input', 'id' => 'on-going']) }}
                <label class="form-check-label" for="on-going">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'continuing', false, ['class' => 'form-check-input', 'id' => 'continuing']) }}
                <label class="form-check-label" for="continuing">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'terminating', false, ['class' => 'form-check-input', 'id' => 'terminating']) }}
                <label class="form-check-label" for="terminating">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                {{ Form::radio('project_status', 'coordinated', false, ['class' => 'form-check-input', 'id' => 'coordinated']) }}
                <label class="form-check-label" for="coordinated">Coordinated</label>
            </div>
        </div>
    </div>
</div>
{{-- /Project Status --}}

<br>

{{-- Mode of Implementation --}}
<label for="implementation_mode" class="form-label">Mode of Implementation:</label>
<br>
<div class="row mb-3 form-group" id="implementation_mode">
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-administration', false, ['class' => 'form-check-input', 'id' => 'by-administration']) }}
            <label class="form-check-label ml-2" for="by-administration">
                By Administration
            </label>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            {{ Form::radio('implementation_mode', 'by-contract', false, ['class' => 'form-check-input', 'id' => 'by-contract']) }}
            <label class="form-check-label ml-2" for="by-contract">
                By Contract
            </label>
        </div>
    </div>
</div>
{{-- /Mode of Implementation --}}

<br>

{{-- project basis --}}

<div class="row mb-3">
    <div class="col-md-8">
        <label for="project_basis">Project Basis</label>
        {{ Form::text('project_basis', null, ['class' => 'form-control', 'id' => 'project_basis']) }}
    </div>
</div>

{{-- /project basis --}}

<br>



<div class="row mb-3">
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="total_project_cost" class="col-form-label text-md-end">Total Project Cost</label>
        {{ Form::number('total_project_cost', null, ['class' => 'form-control', 'id' => 'total_project_cost', 'autocomplete' => 'total_project_cost', 'autofocus','readonly' => 'readonly']) }}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="direct_cost" class="col-form-label text-md-end">Direct Cost</label>
        {{ Form::number('direct_cost', null, ['class' => 'form-control', 'id' => 'direct_cost', 'autocomplete' => 'direct_cost', 'autofocus']) }}
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="indirect_cost" class="col-form-label text-md-end">Indirect Cost</label>
        {{ Form::number('indirect_cost', null, ['class' => 'form-control', 'id' => 'indirect_cost']) }}
    </div>
</div>


@section('javascript')
<script>
    $(document).ready(function() {
console.log("test");

        $('#direct_cost').on('input', function() {
            var directCost = $(this).val();
            console.log("Direct Cost: " + directCost);
        });
    });
</script>
@endsection

{{-- /project cost --}}

<br>

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="source_of_fund" class="col-form-label text-md-end">Source of Fund</label>
        {{ Form::text('source_of_fund', null, ['class' => 'form-control', 'id' => 'source_of_fund', 'autocomplete' => 'source_of_fund', 'autofocus']) }}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="budget_year" class="col-form-label text-md-end">Budget Year</label>
        {{ Form::text('budget_year', null, ['class' => 'form-control', 'id' => 'budget_year']) }}
    </div>
</div>

<br>

{{-- Core and Sub Core Program Addressed --}}
<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="core_program" class="col-form-label text-md-end">Core Program Addressed:</label>
            {{ Form::text('core_program', null, ['class' => 'form-control', 'id' => 'core_program', 'placeholder' => 'Enter core program addressed']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sub_program" class="col-form-label text-md-end">Sub-program Addressed:</label>
            {{ Form::text('sub_program', null, ['class' => 'form-control', 'id' => 'sub_program', 'placeholder' => 'Enter sub-program addressed']) }}
        </div>
    </div>
</div>


{{-- /Core and Sub Core Program Addressed --}}

<br>

{{-- Project Duration --}}

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_start" class="col-form-label text-md-end">Target Date of Start</label>
        {{ Form::date('target_date_start', null, ['class' => 'form-control', 'id' => 'target_date_start']) }}
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_completion" class="col-form-label text-md-end">Target Date of Completion</label>
        {{ Form::date('target_date_completion', null, ['class' => 'form-control', 'id' => 'target_date_completion']) }}
    </div>
</div>

{{-- /Project Duration --}}


