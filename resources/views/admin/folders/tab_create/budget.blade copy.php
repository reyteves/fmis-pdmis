<br>

{{-- Project Status --}}
<div class="row mb-3 pt-3">
    <div class="col-md-12">
        <label for="project_status" class="d-block">Project Status:</label>
        <br>
        <div class="form-group" id="project_status">
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="program_status" id="proposed" value="proposed">
                <label class="form-check-label" for="proposed">Proposed</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="program_status" id="on-going" value="on-going">
                <label class="form-check-label" for="on-going">On-going</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="program_status" id="continuing" value="continuing">
                <label class="form-check-label" for="continuing">Continuing</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="program_status" id="terminating"
                    value="terminating">
                <label class="form-check-label" for="terminating">Terminating</label>
            </div>
            <div class="form-check form-check-inline mb-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="program_status" id="coordinated"
                    value="coordinated">
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
            <input class="form-check-input" type="radio" name="implementation_mode" id="by-administration"
                value="by-administration">
            <label class="form-check-label ml-2" for="by-administration">
                By Administration
            </label>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="implementation_mode" id="by-contract" value="by-contract">
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
        <input id="project_basis" type="text" class="form-control" name="project_basis" value="">
    </div>
</div>

{{-- /project basis --}}

<br>

{{-- project cost --}}

<div class="row mb-3">
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="total_project_cost" class="col-form-label text-md-end">Total Project Cost</label>
        <input id="total_project_cost" type="number" class="form-control" name="total_project_cost" value=""
            autocomplete="total_project_cost" autofocus>
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="direct_cost" class="col-form-label text-md-end">Direct Cost</label>
        <input id="direct_cost" type="number" class="form-control" name="direct_cost" value=""
            autocomplete="direct_cost" autofocus>
    </div>
    <div class="col-md-4 col-lg-4 col-xl-4">
        <label for="indirect_cost" class="col-form-label text-md-end">Indirect Cost</label>
        <input id="indirect_cost" type="number" class="form-control" name="indirect_cost" value="">
    </div>
</div>
{{-- /project cost --}}

<br>

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="source_of_fund" class="col-form-label text-md-end">Source of Fund</label>
        <input id="source_of_fund" type="text" class="form-control" name="source_of_fund" value=""
            autocomplete="source_of_fund" autofocus>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="budget_year" class="col-form-label text-md-end">Budget Year</label>
        <input id="budget_year" type="text" class="form-control" name="budget_year" value="">
    </div>
</div>

<br>

{{-- Core and Sub Core Program Addressed --}}
<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="core_program" class="col-form-label text-md-end">Core Program Addressed:</label>
            <input class="form-control" type="text" name="core_program" id="core_program"
                placeholder="Enter core program addressed">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sub_program" class="col-form-label text-md-end">Sub-program Addressed:</label>
            <input class="form-control" type="text" id="sub_program" name="sub_program"
                placeholder="Enter sub-program addressed">
        </div>
    </div>
</div>


{{-- /Core and Sub Core Program Addressed --}}

<br>

{{-- Project Duration --}}

<div class="row mb-3">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_start" class="col-form-label text-md-end">Target Date of Start</label>
        <input id="target_date_start" type="date" class="form-control" name="target_date_start" value="">
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <label for="target_date_completion" class="col-form-label text-md-end">Target Date of Completion</label>
        <input id="target_date_completion" type="date" class="form-control" name="target_date_completion"
            value="">
    </div>
</div>

{{-- /Project Duration --}}
