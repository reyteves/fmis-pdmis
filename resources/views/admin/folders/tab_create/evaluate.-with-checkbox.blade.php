
{{-- input boxes --}}
<p>A. Required Format </p>

{{--  --}}
<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('format_check', '1. Format', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('format_check', '1', false, ['class' => 'form-check-input', 'id' => 'format_check_yes']) !!}
            {!! Form::label('format_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('format_check', '0', false, ['class' => 'form-check-input', 'id' => 'format_check_no']) !!}
            {!! Form::label('format_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('format_comment', old('format_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}     
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('provincial_evaluation_check', '2. Provincial Evaluation Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('provincial_evaluation_check', '1', false, ['class' => 'form-check-input', 'id' => 'provincial_evaluation_check_yes']) !!}
            {!! Form::label('provincial_evaluation_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('provincial_evaluation_check', '0', false, ['class' => 'form-check-input', 'id' => 'provincial_evaluation_check_no']) !!}
            {!! Form::label('provincial_evaluation_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('provincial_evaluation_comment', old('provincial_evaluation_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('regional_validation_check', '3. Regional Validation Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('regional_validation_check', '1', false, ['class' => 'form-check-input', 'id' => 'regional_validation_check_yes']) !!}
            {!! Form::label('regional_validation_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('regional_validation_check', '0', false, ['class' => 'form-check-input', 'id' => 'regional_validation_check_no']) !!}
            {!! Form::label('regional_validation_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('regional_validation_comment', old('regional_validation_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>

{{--  --}}




{{--  --}}

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('general_information_check', 'General Information Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('general_information_check', '1', false, ['class' => 'form-check-input', 'id' => 'general_information_check_yes']) !!}
            {!! Form::label('general_information_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('general_information_check', '0', false, ['class' => 'form-check-input', 'id' => 'general_information_check_no']) !!}
            {!! Form::label('general_information_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('general_information_comment', old('general_information_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('background_and_rationale_check', 'Background and Rationale Check', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_check', old('background_and_rationale_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('background_and_rationale_comment', 'Background and Rationale Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_comment', old('background_and_rationale_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('background_and_rationale_check', 'Background and Rationale Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('background_and_rationale_check', '1', false, ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_yes']) !!}
            {!! Form::label('background_and_rationale_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('background_and_rationale_check', '0', false, ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_no']) !!}
            {!! Form::label('background_and_rationale_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('background_and_rationale_comment', old('background_and_rationale_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('objectives_check', 'Objectives Check', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_check', old('objectives_check'), ['class' => 'form-control', 'rows' => 1]) !!}


{!! Form::label('objectives_comment', 'Objectives Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_comment', old('objectives_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('objectives_check', 'Objectives Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('objectives_check', '1', false, ['class' => 'form-check-input', 'id' => 'objectives_check_yes']) !!}
            {!! Form::label('objectives_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('objectives_check', '0', false, ['class' => 'form-check-input', 'id' => 'objectives_check_no']) !!}
            {!! Form::label('objectives_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('objectives_comment', old('objectives_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('project_description_check', 'Project Description Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_check', old('project_description_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_description_comment', 'Project Description Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_comment', old('project_description_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('project_description_check', 'Project Description Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('project_description_check', '1', false, ['class' => 'form-check-input', 'id' => 'project_description_check_yes']) !!}
            {!! Form::label('project_description_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('project_description_check', '0', false, ['class' => 'form-check-input', 'id' => 'project_description_check_no']) !!}
            {!! Form::label('project_description_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('project_description_comment', old('project_description_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>



{{-- {!! Form::label('implementation_strategies_check', 'Implementation Strategies Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_check', old('implementation_strategies_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_strategies_comment', 'Implementation Strategies Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_comment', old('implementation_strategies_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}



<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('implementation_strategies_check', 'Implementation Strategies Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('implementation_strategies_check', '1', false, ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_yes']) !!}
            {!! Form::label('implementation_strategies_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('implementation_strategies_check', '0', false, ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_no']) !!}
            {!! Form::label('implementation_strategies_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('implementation_strategies_comment', old('implementation_strategies_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('sustainability_plan_check', 'Sustainability Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_check', old('sustainability_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sustainability_plan_comment', 'Sustainability Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_comment', old('sustainability_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('sustainability_plan_check', 'Sustainability Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sustainability_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_yes']) !!}
            {!! Form::label('sustainability_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sustainability_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_no']) !!}
            {!! Form::label('sustainability_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('sustainability_plan_comment', old('sustainability_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>



{{-- {!! Form::label('budgetary_requirements_check', 'Budgetary Requirements Check', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_check', old('budgetary_requirements_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('budgetary_requirements_comment', 'Budgetary Requirements Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_comment', old('budgetary_requirements_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('budgetary_requirements_check', 'Budgetary Requirements Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('budgetary_requirements_check', '1', false, ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_yes']) !!}
            {!! Form::label('budgetary_requirements_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('budgetary_requirements_check', '0', false, ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_no']) !!}
            {!! Form::label('budgetary_requirements_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('budgetary_requirements_comment', old('budgetary_requirements_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('attachments_check', 'Attachments Check', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_check', old('attachments_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('attachments_comment', 'Attachments Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_comment', old('attachments_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('attachments_check', 'Attachments Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('attachments_check', '1', false, ['class' => 'form-check-input', 'id' => 'attachments_check_yes']) !!}
            {!! Form::label('attachments_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('attachments_check', '0', false, ['class' => 'form-check-input', 'id' => 'attachments_check_no']) !!}
            {!! Form::label('attachments_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('attachments_comment', old('attachments_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>



{{--
{!! Form::label('signatories_check', 'Signatories Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_check', old('signatories_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signatories_comment', 'Signatories Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_comment', old('signatories_comment'), ['class' => 'form-control', 'rows' => 1]) !!}
--}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('signatories_check', 'Signatories Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signatories_check', '1', false, ['class' => 'form-check-input', 'id' => 'signatories_check_yes']) !!}
            {!! Form::label('signatories_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signatories_check', '0', false, ['class' => 'form-check-input', 'id' => 'signatories_check_no']) !!}
            {!! Form::label('signatories_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('signatories_comment', old('signatories_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('ipra_rights_check', 'IPRA Rights Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_check', old('ipra_rights_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ipra_rights_comment', 'IPRA Rights Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('ipra_rights_check', 'IPRA Rights Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ipra_rights_check', '1', false, ['class' => 'form-check-input', 'id' => 'ipra_rights_check_yes']) !!}
            {!! Form::label('ipra_rights_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ipra_rights_check', '0', false, ['class' => 'form-check-input', 'id' => 'ipra_rights_check_no']) !!}
            {!! Form::label('ipra_rights_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('ipra_rights_comment', old('ipra_rights_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('presidents_agenda_check', "President's Agenda Check", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_check', old('presidents_agenda_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('presidents_agenda_comment', "President's Agenda Comment", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_comment', old('presidents_agenda_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('presidents_agenda_check', "President's Agenda Check", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('presidents_agenda_check', '1', false, ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_yes']) !!}
            {!! Form::label('presidents_agenda_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('presidents_agenda_check', '0', false, ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_no']) !!}
            {!! Form::label('presidents_agenda_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('presidents_agenda_comment', old('presidents_agenda_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_check', old('pdp_pip_check'), ['class' => 'form-control', 'rows' => 1]) !!}


{!! Form::label('pdp_pip_comment', 'PDP PIP Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('pdp_pip_check', 'PDP-PIP Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '1', false, ['class' => 'form-check-input', 'id' => 'pdp_pip_check_yes']) !!}
            {!! Form::label('pdp_pip_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '0', false, ['class' => 'form-check-input', 'id' => 'pdp_pip_check_no']) !!}
            {!! Form::label('pdp_pip_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('pdp_pip_comment', old('pdp_pip_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_check', old('ip_master_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}


{!! Form::label('ip_master_plan_comment', 'IP Master Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!}. --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_yes']) !!}
            {!! Form::label('ip_master_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_no']) !!}
            {!! Form::label('ip_master_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('ip_master_plan_comment', old('ip_master_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_check', old('strategic_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_comment', 'Strategic Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'strategic_plan_check_yes']) !!}
            {!! Form::label('strategic_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'strategic_plan_check_no']) !!}
            {!! Form::label('strategic_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('strategic_plan_comment', old('strategic_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_check', old('workflow_framework_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_comment', 'Workflow Framework Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '1', false, ['class' => 'form-check-input', 'id' => 'workflow_framework_check_yes']) !!}
            {!! Form::label('workflow_framework_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '0', false, ['class' => 'form-check-input', 'id' => 'workflow_framework_check_no']) !!}
            {!! Form::label('workflow_framework_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('workflow_framework_comment', old('workflow_framework_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>



{{-- {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_check', old('building_blocks_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_comment', 'Building Blocks Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_comment', old('building_blocks_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '1', false, ['class' => 'form-check-input', 'id' => 'building_blocks_check_yes']) !!}
            {!! Form::label('building_blocks_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '0', false, ['class' => 'form-check-input', 'id' => 'building_blocks_check_no']) !!}
            {!! Form::label('building_blocks_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('building_blocks_comment', old('building_blocks_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_check', old('strategic_directions_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_comment', 'Strategic Directions Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-group col-md-2">
    {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
</div>
<div class="form-group col-md-2">
    <div class="form-check">
        {!! Form::radio('strategic_directions_check', '1', false, ['class' => 'form-check-input', 'id' => 'strategic_directions_check_yes']) !!}
        {!! Form::label('strategic_directions_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
    </div>
</div>
<div class="form-group col-md-2">
    <div class="form-check">
        {!! Form::radio('strategic_directions_check', '0', false, ['class' => 'form-check-input', 'id' => 'strategic_directions_check_no']) !!}
        {!! Form::label('strategic_directions_check_no', 'No', ['class' => 'form-check-label']) !!}
    </div>
</div>
<div class="form-group col-md-6">
    {!! Form::text('strategic_directions_comment', old('strategic_directions_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
</div>
</div>


{{-- {!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_check', old('prexc_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_comment', 'PREXC Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_comment', old('prexc_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('prexc_comment_check', 'PREXC Comment Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('prexc_comment_check', '1', false, ['class' => 'form-check-input', 'id' => 'prexc_comment_check_yes']) !!}
            {!! Form::label('prexc_comment_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('prexc_comment_check', '0', false, ['class' => 'form-check-input', 'id' => 'prexc_comment_check_no']) !!}
            {!! Form::label('prexc_comment_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('prexc_comment', old('prexc_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_check', old('sdg_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_comment', 'SDG Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_comment', old('sdg_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '1', false, ['class' => 'form-check-input', 'id' => 'sdg_check_yes']) !!}
            {!! Form::label('sdg_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '0', false, ['class' => 'form-check-input', 'id' => 'sdg_check_no']) !!}
            {!! Form::label('sdg_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('sdg_comment', old('sdg_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>



{{-- {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_check', old('signature_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_comment', 'Signature Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_comment', old('signature_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '1', false, ['class' => 'form-check-input', 'id' => 'signature_check_yes']) !!}
            {!! Form::label('signature_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '0', false, ['class' => 'form-check-input', 'id' => 'signature_check_no']) !!}
            {!! Form::label('signature_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('signature_comment', old('signature_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>


{{-- {!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_check', old('pdp_pip_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_comment', 'PDP PIP Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '1', false, ['class' => 'form-check-input', 'id' => 'pdp_pip_check_yes']) !!}
            {!! Form::label('pdp_pip_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '0', false, ['class' => 'form-check-input', 'id' => 'pdp_pip_check_no']) !!}
            {!! Form::label('pdp_pip_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('pdp_pip_comment', old('pdp_pip_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_check', old('ip_master_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ip_master_plan_comment', 'IP Master Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_yes']) !!}
            {!! Form::label('ip_master_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_no']) !!}
            {!! Form::label('ip_master_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('ip_master_plan_comment', old('ip_master_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_check', old('strategic_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_comment', 'Strategic Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'strategic_plan_check_yes']) !!}
            {!! Form::label('strategic_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'strategic_plan_check_no']) !!}
            {!! Form::label('strategic_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('strategic_plan_comment', old('strategic_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_check', old('workflow_framework_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_comment', 'Workflow Framework Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '1', false, ['class' => 'form-check-input', 'id' => 'workflow_framework_check_yes']) !!}
            {!! Form::label('workflow_framework_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '0', false, ['class' => 'form-check-input', 'id' => 'workflow_framework_check_no']) !!}
            {!! Form::label('workflow_framework_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('workflow_framework_comment', old('workflow_framework_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_check', old('building_blocks_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_comment', 'Building Blocks Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_comment', old('building_blocks_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '1', false, ['class' => 'form-check-input', 'id' => 'building_blocks_check_yes']) !!}
            {!! Form::label('building_blocks_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '0', false, ['class' => 'form-check-input', 'id' => 'building_blocks_check_no']) !!}
            {!! Form::label('building_blocks_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('building_blocks_comment', old('building_blocks_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_check', old('strategic_directions_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_comment', 'Strategic Directions Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_directions_check', '1', false, ['class' => 'form-check-input', 'id' => 'strategic_directions_check_yes']) !!}
            {!! Form::label('strategic_directions_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('strategic_directions_check', '0', false, ['class' => 'form-check-input', 'id' => 'strategic_directions_check_no']) !!}
            {!! Form::label('strategic_directions_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('strategic_directions_comment', old('strategic_directions_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>






{{-- {!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_check', old('prexc_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_comment', 'PREXC Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_comment', old('prexc_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('prexc_check', 'Prexc Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('prexc_check', '1', false, ['class' => 'form-check-input', 'id' => 'prexc_check_yes']) !!}
            {!! Form::label('prexc_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('prexc_check', '0', false, ['class' => 'form-check-input', 'id' => 'prexc_check_no']) !!}
            {!! Form::label('prexc_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('prexc_comment', old('prexc_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_check', old('sdg_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_comment', 'SDG Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_comment', old('sdg_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '1', false, ['class' => 'form-check-input', 'id' => 'sdg_check_yes']) !!}
            {!! Form::label('sdg_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '0', false, ['class' => 'form-check-input', 'id' => 'sdg_check_no']) !!}
            {!! Form::label('sdg_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('sdg_comment', old('sdg_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_check', old('signature_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_comment', 'Signature Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_comment', old('signature_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}



<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '1', false, ['class' => 'form-check-input', 'id' => 'signature_check_yes']) !!}
            {!! Form::label('signature_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '0', false, ['class' => 'form-check-input', 'id' => 'signature_check_no']) !!}
            {!! Form::label('signature_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('signature_comment', old('signature_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('procurement_management_plan_check', 'Procurement Management Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_check', old('procurement_management_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('procurement_management_plan_comment', 'Procurement Management Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_comment', old('procurement_management_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('procurement_management_plan_check', 'Procurement Management Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('procurement_management_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_yes']) !!}
            {!! Form::label('procurement_management_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('procurement_management_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_no']) !!}
            {!! Form::label('procurement_management_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('procurement_management_plan_comment', old('procurement_management_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('implementation_plan_check', 'Implementation Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_check', old('implementation_plan_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_plan_comment', 'Implementation Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_comment', old('implementation_plan_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('implementation_plan_check', 'Implementation Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('implementation_plan_check', '1', false, ['class' => 'form-check-input', 'id' => 'implementation_plan_check_yes']) !!}
            {!! Form::label('implementation_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('implementation_plan_check', '0', false, ['class' => 'form-check-input', 'id' => 'implementation_plan_check_no']) !!}
            {!! Form::label('implementation_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('implementation_plan_comment', old('implementation_plan_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>





{{-- {!! Form::label('expenditure_summary_check', 'Expenditure Summary Check', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_check', old('expenditure_summary_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('expenditure_summary_comment', 'Expenditure Summary Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_comment', old('expenditure_summary_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('expenditure_summary_check', 'Expenditure Summary Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('expenditure_summary_check', '1', false, ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_yes']) !!}
            {!! Form::label('expenditure_summary_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('expenditure_summary_check', '0', false, ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_no']) !!}
            {!! Form::label('expenditure_summary_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('expenditure_summary_comment', old('expenditure_summary_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('beneficiaries_check', 'Beneficiaries Check', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_check', old('beneficiaries_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('beneficiaries_comment', 'Beneficiaries Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_comment', old('beneficiaries_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('beneficiaries_check', 'Beneficiaries Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('beneficiaries_check', '1', false, ['class' => 'form-check-input', 'id' => 'beneficiaries_check_yes']) !!}
            {!! Form::label('beneficiaries_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('beneficiaries_check', '0', false, ['class' => 'form-check-input', 'id' => 'beneficiaries_check_no']) !!}
            {!! Form::label('beneficiaries_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('beneficiaries_comment', old('beneficiaries_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('project_page_photocopy_check', 'Project Page Photocopy Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_check', old('project_page_photocopy_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_page_photocopy_comment', 'Project Page Photocopy Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_comment', old('project_page_photocopy_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('project_page_photocopy_check', 'Project Page Photocopy Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('project_page_photocopy_check', '1', false, ['class' => 'form-check-input', 'id' => 'project_page_photocopy_check_yes']) !!}
            {!! Form::label('project_page_photocopy_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('project_page_photocopy_check', '0', false, ['class' => 'form-check-input', 'id' => 'project_page_photocopy_check_no']) !!}
            {!! Form::label('project_page_photocopy_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('project_page_photocopy_comment', old('project_page_photocopy_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('plan_materials_map_check', 'Plan Materials Map Check', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_check', old('plan_materials_map_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('plan_materials_map_comment', 'Plan Materials Map Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_comment', old('plan_materials_map_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('plan_materials_map_check', 'Plan Materials Map Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('plan_materials_map_check', '1', false, ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_yes']) !!}
            {!! Form::label('plan_materials_map_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('plan_materials_map_check', '0', false, ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_no']) !!}
            {!! Form::label('plan_materials_map_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('plan_materials_map_comment', old('plan_materials_map_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- {!! Form::label('return_on_investment_check', 'Return on Investment Check', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_check', old('return_on_investment_check'), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('return_on_investment_comment', 'Return on Investment Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_comment', old('return_on_investment_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('return_on_investment_check', 'Return on Investment Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('return_on_investment_check', '1', false, ['class' => 'form-check-input', 'id' => 'return_on_investment_check_yes']) !!}
            {!! Form::label('return_on_investment_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-check">
            {!! Form::radio('return_on_investment_check', '0', false, ['class' => 'form-check-input', 'id' => 'return_on_investment_check_no']) !!}
            {!! Form::label('return_on_investment_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::text('return_on_investment_comment', old('return_on_investment_comment'), ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Required Actions']) !!}
    </div>
</div>




{{-- <br><br>


<div class="print-content"> 
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 8.75pt 2.8pt;"><strong>CHECKLIST OF REQUIREMENTS FOR THE APPROVAL OF PROJECT PROPOSALS&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>Project Title&nbsp; :&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>Location&nbsp; :&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>Cost &amp; Source&nbsp; :&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>Period of implementation:&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>No. of Beneficiaries :&nbsp;</strong></p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 8.65pt -.75pt;"><strong>SYNOPSIS&nbsp; :</strong> &nbsp;</p>
    <p style="line-height: 107%; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    <table style="border: none; width: 472.4pt; margin-left: -4.55pt; border-collapse: collapse;">
    <tbody>
    <tr>
    <td style="width: 21.95pt; border-top: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;" rowspan="2">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;" rowspan="2">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 58.1pt;"><strong><span style="font-size: 12px;">REQUIREMENTS&nbsp;</span></strong></p>
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 14.2pt 0cm 0cm;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></p>
    </td>
    <td style="width: 94.6pt; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;" colspan="2">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 5.65pt;"><strong><span style="font-size: 12px;">COMPLIED WITH?&nbsp;</span></strong></p>
    </td>
    <td style="width: 157.25pt; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;" rowspan="2">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 5.65pt;"><strong><span style="font-size: 12px;">REQUIRED ACTIONS&nbsp;</span></strong></p>
    </td>
    </tr>
    <tr>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 5.8pt;"><strong><span style="font-size: 12px;">YES&nbsp;</span></strong></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 5.6pt;"><strong><span style="font-size: 12px;">NO&nbsp;</span></strong></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 4.7pt;"><strong><span style="font-size: 12px;">A.</span></strong><strong><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span></strong></p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><strong><span style="font-size: 12px;">Required Format&nbsp;</span></strong></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 7.9pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 7.7pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: center; margin: 0cm 0cm 0cm 7.85pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">1.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Format&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">2.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Provincial Evaluation&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">3.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Regional Validation&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 4.7pt;"><strong><span style="font-size: 12px;">B.</span></strong><strong><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span></strong></p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><strong><span style="font-size: 12px;">Contents&nbsp;</span></strong></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">I.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">General Information&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: Calibri, sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">II.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Background and Rationale&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">III.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Objectives&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-indent: -22.45pt; margin: 0cm 0cm 0cm 23.15pt;"><span style="font-size: 12px;">IV.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Project Description: Inputs/Expected Outputs/Outcome/Impact&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">V.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Project Implementation and M&amp;E Strategies&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">VI.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Sustainability Plan&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">VII.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Budgetary Requirements&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><span style="font-size: 12px;">VIII.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span><span style="font-size: 12px;">Attachments&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">IX.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Signatories&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 4.7pt;"><strong><span style="font-size: 12px;">C.</span></strong><strong><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span></strong></p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><strong><span style="font-size: 12px;">Consistency with Priority Framework&nbsp;</span></strong></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">1.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">IPRA (4 BR and 36 specific rights)&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">2.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">President&rsquo;s Social Agenda &nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">3.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">PDP/PIP&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">4.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">IP Master Plan&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">5.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Strategic Plan/ADSPPD&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">6.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Strategic Workflow Framework (SWF)&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">7.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">11 Building Blocks&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">8.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Strategic Directions&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">9.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">PrExC&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><span style="font-size: 12px;">10.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span><span style="font-size: 12px;">SDG&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 4.7pt;"><strong><span style="font-size: 12px;">D.</span></strong><strong><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span></strong></p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm .7pt;"><strong><span style="font-size: 12px;">Completeness&nbsp;</span></strong></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">1.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Signature&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;"><span style="font-size: 12px;">2.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Attachment&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-indent: -18.0pt; margin: 0cm 0cm 0cm 37.45pt;"><span style="font-size: 12px;">a.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Project Procurement Management Plan (PPMP) &nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: 12px;">b.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Project Implementation Plan/Gantt Chart &nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: 12px;">c.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Summary of Expenditures &nbsp;&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.4pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: 12px;">d.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;</span><span style="font-size: 12px;">List of Beneficiaries &nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 11.5pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-indent: -18.0pt; margin: 0cm 0cm 0cm 37.45pt;"><span style="font-size: 12px;">e.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="font-size: 12px;">Photocopy of the page of the Plan where the project is derived&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 22.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-indent: -18.0pt; margin: 0cm 0cm 0cm 37.45pt;"><span style="font-size: 12px;">f.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12px;">Plan, Bill of materials and Vicinity Map (Infra)&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.55pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    <tr>
    <td style="width: 21.95pt; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm;">&nbsp;</p>
    </td>
    <td style="width: 198.65pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; text-align: justify; text-indent: -18.0pt; margin: 0cm 0cm 0cm 37.45pt;"><span style="font-size: 12px;">g.</span><span style="font-size: 12px; font-family: 'Arial',sans-serif;">&nbsp;</span><span style="font-size: 12px;">Return on Investment for Livelihood and other similar projects&nbsp;</span></p>
    </td>
    <td style="width: 49.6pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.4pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 45pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    <td style="width: 157.25pt; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 1.65pt 6pt 0cm 0cm; height: 22.45pt; vertical-align: top;">
    <p style="line-height: normal; font-size: 15px; font-family: 'Calibri',sans-serif; color: black; margin: 0cm 0cm 0cm 5.3pt;"><span style="font-size: 12px;">&nbsp;</span></p>
    </td>
    </tr>
    </tbody>
    </table>
   
</div>

<div class="row">
    <div class="col-xs-12 text-right">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</div> --}}