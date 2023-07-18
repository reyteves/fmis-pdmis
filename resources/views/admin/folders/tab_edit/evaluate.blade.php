


<p>A. Required Format </p>

{{-- {!! Form::label('format_check', 'Format Check', ['class' => 'control-label']) !!}
{!! Form::textarea('format_check', old('format_check', $folder->evaluation->format_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('format_comment', 'Format Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('format_comment', old('format_comment'), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('format_check', '1. Format', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('format_check', '1', $folder->evaluation->format_check == '1', ['class' => 'form-check-input', 'id' => 'format_check_yes']) !!}
            {!! Form::label('format_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('format_check', '0', $folder->evaluation->format_check == '0', ['class' => 'form-check-input', 'id' => 'format_check_no']) !!}
            {!! Form::label('format_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('format_comment', old('format_comment', $folder->evaluation->format_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>


{{-- {!! Form::label('provincial_evaluation_check', 'Provincial Evaluation Check', ['class' => 'control-label']) !!}
{!! Form::textarea('provincial_evaluation_check', old('provincial_evaluation_check', $folder->evaluation->provincial_evaluation_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('provincial_evaluation_comment', 'Provincial Evaluation Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('provincial_evaluation_comment', old('provincial_evaluation_comment', $folder->evaluation->provincial_evaluation_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('provincial_evaluation_check', '2. Provincial Evaluation', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('provincial_evaluation_check', '1', $folder->evaluation->provincial_evaluation_check == '1', ['class' => 'form-check-input', 'id' => 'provincial_evaluation_check_yes']) !!}
            {!! Form::label('provincial_evaluation_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('provincial_evaluation_check', '0', $folder->evaluation->provincial_evaluation_check == '0', ['class' => 'form-check-input', 'id' => 'provincial_evaluation_check_no']) !!}
            {!! Form::label('provincial_evaluation_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('provincial_evaluation_comment', old('provincial_evaluation_comment', $folder->evaluation->provincial_evaluation_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('regional_validation_check', 'Regional Validation Check', ['class' => 'control-label']) !!}
{!! Form::textarea('regional_validation_check', old('regional_validation_check', $folder->evaluation->regional_validation_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('regional_validation_comment', 'Regional Validation Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('regional_validation_comment', old('regional_validation_comment', $folder->evaluation->regional_validation_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('regional_validation_check', '3. Regional Validation', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('regional_validation_check', '1', $folder->evaluation->regional_validation_check == '1', ['class' => 'form-check-input', 'id' => 'regional_validation_check_yes']) !!}
            {!! Form::label('regional_validation_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('regional_validation_check', '0', $folder->evaluation->regional_validation_check == '0', ['class' => 'form-check-input', 'id' => 'regional_validation_check_no']) !!}
            {!! Form::label('regional_validation_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('regional_validation_comment', old('regional_validation_comment', $folder->evaluation->regional_validation_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('general_information_check', 'General Information Check', ['class' => 'control-label']) !!}
{!! Form::textarea('general_information_check', old('general_information_check', $folder->evaluation->general_information_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('general_information_comment', 'General Information Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('general_information_comment', old('general_information_comment', $folder->evaluation->general_information_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('general_information_check', 'I. General Information', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('general_information_check', '1', $folder->evaluation->general_information_check == '1', ['class' => 'form-check-input', 'id' => 'general_information_check_yes']) !!}
            {!! Form::label('general_information_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('general_information_check', '0', $folder->evaluation->general_information_check == '0', ['class' => 'form-check-input', 'id' => 'general_information_check_no']) !!}
            {!! Form::label('general_information_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('general_information_comment', old('general_information_comment', $folder->evaluation->general_information_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>


{{-- {!! Form::label('background_and_rationale_check', 'Background and Rationale Check', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_check', old('background_and_rationale_check', $folder->evaluation->background_and_rationale_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('background_and_rationale_comment', 'Background and Rationale Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_comment', old('background_and_rationale_comment', $folder->evaluation->background_and_rationale_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}



<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('background_and_rationale_check', 'II. Background and Rationale', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('background_and_rationale_check', '1', $folder->evaluation->background_and_rationale_check == '1', ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_yes']) !!}
            {!! Form::label('background_and_rationale_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('background_and_rationale_check', '0', $folder->evaluation->background_and_rationale_check == '0', ['class' => 'form-check-input', 'id' => 'background_and_rationale_check_no']) !!}
            {!! Form::label('background_and_rationale_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('background_and_rationale_comment', old('background_and_rationale_comment', $folder->evaluation->background_and_rationale_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>





{{-- {!! Form::label('objectives_check', 'Objectives Check', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_check', old('objectives_check', $folder->evaluation->objectives_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('objectives_comment', 'Objectives Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_comment', old('objectives_comment', $folder->evaluation->objectives_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('objectives_check', 'III. Objectives', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('objectives_check', '1', $folder->evaluation->objectives_check == '1', ['class' => 'form-check-input', 'id' => 'objectives_check_yes']) !!}
            {!! Form::label('objectives_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('objectives_check', '0', $folder->evaluation->objectives_check == '0', ['class' => 'form-check-input', 'id' => 'objectives_check_no']) !!}
            {!! Form::label('objectives_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('objectives_comment', old('objectives_comment', $folder->evaluation->objectives_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('project_description_check', 'Project Description Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_check', old('project_description_check', $folder->evaluation->project_description_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_description_comment', 'Project Description Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_comment', old('project_description_comment', $folder->evaluation->project_description_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}



<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('project_description_check', 'IV. Project Description', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('project_description_check', '1', $folder->evaluation->project_description_check == '1', ['class' => 'form-check-input', 'id' => 'project_description_check_yes']) !!}
            {!! Form::label('project_description_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('project_description_check', '0', $folder->evaluation->project_description_check == '0', ['class' => 'form-check-input', 'id' => 'project_description_check_no']) !!}
            {!! Form::label('project_description_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('project_description_comment', old('project_description_comment', $folder->evaluation->project_description_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('implementation_strategies_check', 'Implementation Strategies Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_check', old('implementation_strategies_check', $folder->evaluation->implementation_strategies_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_strategies_comment', 'Implementation Strategies Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_comment', old('implementation_strategies_comment', $folder->evaluation->implementation_strategies_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('implementation_strategies_check', 'Implementation Strategies', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('implementation_strategies_check', '1', $folder->evaluation->implementation_strategies_check == '1', ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_yes']) !!}
            {!! Form::label('implementation_strategies_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('implementation_strategies_check', '0', $folder->evaluation->implementation_strategies_check == '0', ['class' => 'form-check-input', 'id' => 'implementation_strategies_check_no']) !!}
            {!! Form::label('implementation_strategies_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('implementation_strategies_comment', old('implementation_strategies_comment', $folder->evaluation->implementation_strategies_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>

{{-- {!! Form::label('sustainability_plan_check', 'Sustainability Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_check', old('sustainability_plan_check', $folder->evaluation->sustainability_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sustainability_plan_comment', 'Sustainability Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_comment', old('sustainability_plan_comment', $folder->evaluation->sustainability_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('sustainability_plan_check', 'Sustainability Plan', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('sustainability_plan_check', '1', $folder->evaluation->sustainability_plan_check == '1', ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_yes']) !!}
            {!! Form::label('sustainability_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('sustainability_plan_check', '0', $folder->evaluation->sustainability_plan_check == '0', ['class' => 'form-check-input', 'id' => 'sustainability_plan_check_no']) !!}
            {!! Form::label('sustainability_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('sustainability_plan_comment', old('sustainability_plan_comment', $folder->evaluation->sustainability_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>


{{-- {!! Form::label('budgetary_requirements_check', 'Budgetary Requirements Check', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_check', old('budgetary_requirements_check', $folder->evaluation->budgetary_requirements_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('budgetary_requirements_comment', 'Budgetary Requirements Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_comment', old('budgetary_requirements_comment', $folder->evaluation->budgetary_requirements_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('budgetary_requirements_check', 'Budgetary Requirements', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('budgetary_requirements_check', '1', $folder->evaluation->budgetary_requirements_check == '1', ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_yes']) !!}
            {!! Form::label('budgetary_requirements_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('budgetary_requirements_check', '0', $folder->evaluation->budgetary_requirements_check == '0', ['class' => 'form-check-input', 'id' => 'budgetary_requirements_check_no']) !!}
            {!! Form::label('budgetary_requirements_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('budgetary_requirements_comment', old('budgetary_requirements_comment', $folder->evaluation->budgetary_requirements_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('attachments_check', 'Attachments Check', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_check', old('attachments_check', $folder->evaluation->attachments_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('attachments_comment', 'Attachments Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('attachments_check', 'Attachments', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('attachments_check', '1', $folder->evaluation->attachments_check == '1', ['class' => 'form-check-input', 'id' => 'attachments_check_yes']) !!}
            {!! Form::label('attachments_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('attachments_check', '0', $folder->evaluation->attachments_check == '0', ['class' => 'form-check-input', 'id' => 'attachments_check_no']) !!}
            {!! Form::label('attachments_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('signatories_check', 'Signatories Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_check', old('signatories_check', $folder->evaluation->signatories_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signatories_comment', 'Signatories Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_comment', old('signatories_comment', $folder->evaluation->signatories_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('signatories_check', 'Signatories', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('signatories_check', '1', $folder->evaluation->signatories_check == '1', ['class' => 'form-check-input', 'id' => 'signatories_check_yes']) !!}
            {!! Form::label('signatories_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('signatories_check', '0', $folder->evaluation->signatories_check == '0', ['class' => 'form-check-input', 'id' => 'signatories_check_no']) !!}
            {!! Form::label('signatories_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('signatories_comment', old('signatories_comment', $folder->evaluation->signatories_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('ipra_rights_check', 'IPRA Rights Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_check', old('ipra_rights_check', $folder->evaluation->ipra_rights_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ipra_rights_comment', 'IPRA Rights Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment', $folder->evaluation->ipra_rights_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('ipra_rights_check', 'IPRA Rights', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('ipra_rights_check', '1', $folder->evaluation->ipra_rights_check == '1', ['class' => 'form-check-input', 'id' => 'ipra_rights_check_yes']) !!}
            {!! Form::label('ipra_rights_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('ipra_rights_check', '0', $folder->evaluation->ipra_rights_check == '0', ['class' => 'form-check-input', 'id' => 'ipra_rights_check_no']) !!}
            {!! Form::label('ipra_rights_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment', $folder->evaluation->ipra_rights_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('presidents_agenda_check', "President's Agenda Check", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_check', old('presidents_agenda_check', $folder->evaluation->presidents_agenda_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('presidents_agenda_comment', "President's Agenda Comment", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_comment', old('presidents_agenda_comment', $folder->evaluation->presidents_agenda_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('presidents_agenda_check', "President's Agenda", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('presidents_agenda_check', '1', $folder->evaluation->presidents_agenda_check == '1', ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_yes']) !!}
            {!! Form::label('presidents_agenda_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('presidents_agenda_check', '0', $folder->evaluation->presidents_agenda_check == '0', ['class' => 'form-check-input', 'id' => 'presidents_agenda_check_no']) !!}
            {!! Form::label('presidents_agenda_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('presidents_agenda_comment', old('presidents_agenda_comment', $folder->evaluation->presidents_agenda_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_check', old('pdp_pip_check', $folder->evaluation->pdp_pip_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_comment', 'PDP PIP Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('pdp_pip_check', 'PDP-PIP Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '1', $folder->evaluation->pdp_pip_check == '1', ['class' => 'form-check-input', 'id' => 'pdp_pip_check_yes']) !!}
            {!! Form::label('pdp_pip_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('pdp_pip_check', '0', $folder->evaluation->pdp_pip_check == '0', ['class' => 'form-check-input', 'id' => 'pdp_pip_check_no']) !!}
            {!! Form::label('pdp_pip_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_check', old('ip_master_plan_check', $folder->evaluation->ip_master_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}


{!! Form::label('ip_master_plan_comment', 'IP Master Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '1', $folder->evaluation->ip_master_plan_check == '1', ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_yes']) !!}
            {!! Form::label('ip_master_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('ip_master_plan_check', '0', $folder->evaluation->ip_master_plan_check == '0', ['class' => 'form-check-input', 'id' => 'ip_master_plan_check_no']) !!}
            {!! Form::label('ip_master_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_check', old('strategic_plan_check', $folder->evaluation->strategic_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_comment', 'Strategic Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '1', $folder->evaluation->strategic_plan_check == '1', ['class' => 'form-check-input', 'id' => 'strategic_plan_check_yes']) !!}
            {!! Form::label('strategic_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('strategic_plan_check', '0', $folder->evaluation->strategic_plan_check == '0', ['class' => 'form-check-input', 'id' => 'strategic_plan_check_no']) !!}
            {!! Form::label('strategic_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_check', old('workflow_framework_check', $folder->evaluation->workflow_framework_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_comment', 'Workflow Framework Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '1', $folder->evaluation->workflow_framework_check == '1', ['class' => 'form-check-input', 'id' => 'workflow_framework_check_yes']) !!}
            {!! Form::label('workflow_framework_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('workflow_framework_check', '0', $folder->evaluation->workflow_framework_check == '0', ['class' => 'form-check-input', 'id' => 'workflow_framework_check_no']) !!}
            {!! Form::label('workflow_framework_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_check', old('building_blocks_check', $folder->evaluation->building_blocks_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_comment', 'Building Blocks Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_comment', old('building_blocks_comment', $folder->evaluation->building_blocks_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '1', $folder->evaluation->building_blocks_check == '1', ['class' => 'form-check-input', 'id' => 'building_blocks_check_yes']) !!}
            {!! Form::label('building_blocks_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('building_blocks_check', '0', $folder->evaluation->building_blocks_check == '0', ['class' => 'form-check-input', 'id' => 'building_blocks_check_no']) !!}
            {!! Form::label('building_blocks_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('building_blocks_comment', old('building_blocks_comment', $folder->evaluation->building_blocks_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>






{{-- {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_check', old('strategic_directions_check', $folder->evaluation->strategic_directions_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_comment', 'Strategic Directions Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('strategic_directions_check', '1', $folder->evaluation->strategic_directions_check == '1', ['class' => 'form-check-input', 'id' => 'strategic_directions_check_yes']) !!}
            {!! Form::label('strategic_directions_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('strategic_directions_check', '0', $folder->evaluation->strategic_directions_check == '0', ['class' => 'form-check-input', 'id' => 'strategic_directions_check_no']) !!}
            {!! Form::label('strategic_directions_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>







{{-- {!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_check', old('prexc_check', $folder->evaluation->prexc_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_comment', 'PREXC Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('prexc_check', '1', $folder->evaluation->prexc_check == '1', ['class' => 'form-check-input', 'id' => 'prexc_check_yes']) !!}
            {!! Form::label('prexc_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('prexc_check', '0', $folder->evaluation->prexc_check == '0', ['class' => 'form-check-input', 'id' => 'prexc_check_no']) !!}
            {!! Form::label('prexc_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_check', old('sdg_check', $folder->evaluation->sdg_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_comment', 'SDG Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '1', $folder->evaluation->sdg_check == '1', ['class' => 'form-check-input', 'id' => 'sdg_check_yes']) !!}
            {!! Form::label('sdg_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('sdg_check', '0', $folder->evaluation->sdg_check == '0', ['class' => 'form-check-input', 'id' => 'sdg_check_no']) !!}
            {!! Form::label('sdg_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>



{{-- {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_check', old('signature_check', $folder->evaluation->signature_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_comment', 'Signature Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '1', $folder->evaluation->signature_check == '1', ['class' => 'form-check-input', 'id' => 'signature_check_yes']) !!}
            {!! Form::label('signature_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('signature_check', '0', $folder->evaluation->signature_check == '0', ['class' => 'form-check-input', 'id' => 'signature_check_no']) !!}
            {!! Form::label('signature_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>






{{-- {!! Form::label('procurement_management_plan_check', 'Procurement Management Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_check', old('procurement_management_plan_check', $folder->evaluation->procurement_management_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('procurement_management_plan_comment', 'Procurement Management Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_comment', old('procurement_management_plan_comment', $folder->evaluation->procurement_management_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}



<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('procurement_management_plan_check', 'Procurement Management Plan', ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('procurement_management_plan_check', '1', $folder->evaluation->presidents_agenda_check == '1', ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_yes']) !!}
            {!! Form::label('procurement_management_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('procurement_management_plan_check', '0', $folder->evaluation->presidents_agenda_check == '0', ['class' => 'form-check-input', 'id' => 'procurement_management_plan_check_no']) !!}
            {!! Form::label('procurement_management_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('procurement_management_plan_comment', old('procurement_management_plan_comment', $folder->evaluation->presidents_agenda_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>





{{-- {!! Form::label('implementation_plan_check', 'Implementation Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_check', old('implementation_plan_check', $folder->evaluation->implementation_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_plan_comment', 'Implementation Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_comment', old('implementation_plan_comment', $folder->evaluation->implementation_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('implementation_plan_check', "Implementation Plan", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('implementation_plan_check', '1', $folder->evaluation->implementation_plan_check== '1', ['class' => 'form-check-input', 'id' => 'implementation_plan_check_yes']) !!}
            {!! Form::label('implementation_plan_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('implementation_plan_check', '0', $folder->evaluation->implementation_plan_check== '0', ['class' => 'form-check-input', 'id' => 'implementation_plan_check_no']) !!}
            {!! Form::label('implementation_plan_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('implementation_plan_comment', old('presidents_agenda_comment', $folder->evaluation->implementation_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('expenditure_summary_check', 'Expenditure Summary Check', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_check', old('expenditure_summary_check', $folder->evaluation->expenditure_summary_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('expenditure_summary_comment', 'Expenditure Summary Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_comment', old('expenditure_summary_comment', $folder->evaluation->expenditure_summary_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('expenditure_summary_check', "Expenditure Summary", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('expenditure_summary_check', '1', $folder->evaluation->expenditure_summary_check == '1', ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_yes']) !!}
            {!! Form::label('expenditure_summary_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('expenditure_summary_check', '0', $folder->evaluation->expenditure_summary_check == '0', ['class' => 'form-check-input', 'id' => 'expenditure_summary_check_no']) !!}
            {!! Form::label('expenditure_summary_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('expenditure_summary_comment', old('expenditure_summary_comment', $folder->evaluation->expenditure_summary_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>


{{-- {!! Form::label('beneficiaries_check', 'Beneficiaries Check', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_check', old('beneficiaries_check', $folder->evaluation->beneficiaries_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('beneficiaries_comment', 'Beneficiaries Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_comment', old('beneficiaries_comment', $folder->evaluation->beneficiaries_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('beneficiaries_check', "Beneficiaries", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('beneficiaries_check', '1', $folder->evaluation->beneficiaries_check == '1', ['class' => 'form-check-input', 'id' => 'beneficiaries_check_yes']) !!}
            {!! Form::label('beneficiaries_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('beneficiaries_check', '0', $folder->evaluation->beneficiaries_check == '0', ['class' => 'form-check-input', 'id' => 'beneficiaries_check_no']) !!}
            {!! Form::label('beneficiaries_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('beneficiaries_comment', old('beneficiaries_comment', $folder->evaluation->beneficiaries_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>





{{-- {!! Form::label('project_page_photocopy_check', 'Project Page Photocopy Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_check', old('project_page_photocopy_check', $folder->evaluation->project_page_photocopy_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_page_photocopy_comment', 'Project Page Photocopy Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_comment', old('project_page_photocopy_comment', $folder->evaluation->project_page_photocopy_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('project_page_photocopy_check', "Page Photocopy", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('project_page_photocopy_check', '1', $folder->evaluation->project_page_photocopy_check == '1', ['class' => 'form-check-input', 'id' => 'project_page_photocopy_check_yes']) !!}
            {!! Form::label('project_page_photocopy_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('project_page_photocopy_check', '0', $folder->evaluation->project_page_photocopy_check == '0', ['class' => 'form-check-input', 'id' => 'page_photocopy_check_no']) !!}
            {!! Form::label('page_photocopy_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('project_page_photocopy_comment', old('project_page_photocopy_comment', $folder->evaluation->project_page_photocopy_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>







{{-- {!! Form::label('plan_materials_map_check', 'Plan Materials Map Check', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_check', old('plan_materials_map_check', $folder->evaluation->plan_materials_map_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('plan_materials_map_comment', 'Plan Materials Map Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_comment', old('plan_materials_map_comment', $folder->evaluation->plan_materials_map_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}

<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('plan_materials_map_check', "Plan Materials Map", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('plan_materials_map_check', '1', $folder->evaluation->plan_materials_map_check == '1', ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_yes']) !!}
            {!! Form::label('plan_materials_map_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('plan_materials_map_check', '0', $folder->evaluation->plan_materials_map_check == '0', ['class' => 'form-check-input', 'id' => 'plan_materials_map_check_no']) !!}
            {!! Form::label('plan_materials_map_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('plan_materials_map_comment', old('plan_materials_map_comment', $folder->evaluation->plan_materials_map_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>




{{-- {!! Form::label('return_on_investment_check', 'Return on Investment Check', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_check', old('return_on_investment_check', $folder->evaluation->return_on_investment_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('return_on_investment_comment', 'Return on Investment Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_comment', old('return_on_investment_comment', $folder->evaluation->return_on_investment_comment), ['class' => 'form-control', 'rows' => 1]) !!} --}}


<div class="form-row">
    <div class="form-group col-md-2 col-lg-2">
        {!! Form::label('return_on_investment_check', "Return on Investment", ['class' => 'control-label']) !!}
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('return_on_investment_check', '1', $folder->evaluation->return_on_investment_check == '1', ['class' => 'form-check-input', 'id' => 'return_on_investment_check_yes']) !!}
            {!! Form::label('return_on_investment_check_yes', 'Yes', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-2 col-lg-2">
        <div class="form-check">
            {!! Form::radio('return_on_investment_check', '0', $folder->evaluation->return_on_investment_check == '0', ['class' => 'form-check-input', 'id' => 'return_on_investment_check_no']) !!}
            {!! Form::label('return_on_investment_check_no', 'No', ['class' => 'form-check-label']) !!}
        </div>
    </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        {!! Form::textarea('return_on_investment_comment', old('return_on_investment_comment', $folder->evaluation->return_on_investment_comment), ['class' => 'form-control', 'rows' => 1]) !!}
    </div>
</div>