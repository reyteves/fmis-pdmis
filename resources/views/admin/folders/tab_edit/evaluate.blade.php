
{{-- input boxes --}}

{!! Form::label('format_check', 'Format Check', ['class' => 'control-label']) !!}
{!! Form::textarea('format_check', old('format_check', $folder->evaluation->format_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('format_comment', 'Format Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('format_comment', old('format_comment', $folder->evaluation->format_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('provincial_evaluation_check', 'Provincial Evaluation Check', ['class' => 'control-label']) !!}
{!! Form::textarea('provincial_evaluation_check', old('provincial_evaluation_check', $folder->evaluation->provincial_evaluation_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('provincial_evaluation_comment', 'Provincial Evaluation Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('provincial_evaluation_comment', old('provincial_evaluation_comment', $folder->evaluation->provincial_evaluation_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('regional_validation_check', 'Regional Validation Check', ['class' => 'control-label']) !!}
{!! Form::textarea('regional_validation_check', old('regional_validation_check', $folder->evaluation->regional_validation_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('regional_validation_comment', 'Regional Validation Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('regional_validation_comment', old('regional_validation_comment', $folder->evaluation->regional_validation_comment), ['class' => 'form-control', 'rows' => 1]) !!}






{!! Form::label('general_information_check', 'General Information Check', ['class' => 'control-label']) !!}
{!! Form::textarea('general_information_check', old('general_information_check', $folder->evaluation->general_information_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('general_information_comment', 'General Information Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('general_information_comment', old('general_information_comment', $folder->evaluation->general_information_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('background_and_rationale_check', 'Background and Rationale Check', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_check', old('background_and_rationale_check', $folder->evaluation->background_and_rationale_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('background_and_rationale_comment', 'Background and Rationale Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('background_and_rationale_comment', old('background_and_rationale_comment', $folder->evaluation->background_and_rationale_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('objectives_check', 'Objectives Check', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_check', old('objectives_check', $folder->evaluation->objectives_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('objectives_comment', 'Objectives Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('objectives_comment', old('objectives_comment', $folder->evaluation->objectives_comment), ['class' => 'form-control', 'rows' => 1]) !!}





{!! Form::label('project_description_check', 'Project Description Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_check', old('project_description_check', $folder->evaluation->project_description_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_description_comment', 'Project Description Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_description_comment', old('project_description_comment', $folder->evaluation->project_description_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_strategies_check', 'Implementation Strategies Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_check', old('implementation_strategies_check', $folder->evaluation->implementation_strategies_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_strategies_comment', 'Implementation Strategies Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_strategies_comment', old('implementation_strategies_comment', $folder->evaluation->implementation_strategies_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sustainability_plan_check', 'Sustainability Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_check', old('sustainability_plan_check', $folder->evaluation->sustainability_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sustainability_plan_comment', 'Sustainability Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sustainability_plan_comment', old('sustainability_plan_comment', $folder->evaluation->sustainability_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('budgetary_requirements_check', 'Budgetary Requirements Check', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_check', old('budgetary_requirements_check', $folder->evaluation->budgetary_requirements_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('budgetary_requirements_comment', 'Budgetary Requirements Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('budgetary_requirements_comment', old('budgetary_requirements_comment', $folder->evaluation->budgetary_requirements_comment), ['class' => 'form-control', 'rows' => 1]) !!}






{!! Form::label('attachments_check', 'Attachments Check', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_check', old('attachments_check', $folder->evaluation->attachments_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('attachments_comment', 'Attachments Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('attachments_comment', old('attachments_comment', $folder->evaluation->attachments_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signatories_check', 'Signatories Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_check', old('signatories_check', $folder->evaluation->signatories_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signatories_comment', 'Signatories Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signatories_comment', old('signatories_comment', $folder->evaluation->signatories_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ipra_rights_check', 'IPRA Rights Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_check', old('ipra_rights_check', $folder->evaluation->ipra_rights_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ipra_rights_comment', 'IPRA Rights Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ipra_rights_comment', old('ipra_rights_comment', $folder->evaluation->ipra_rights_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('presidents_agenda_check', "President's Agenda Check", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_check', old('presidents_agenda_check', $folder->evaluation->presidents_agenda_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('presidents_agenda_comment', "President's Agenda Comment", ['class' => 'control-label']) !!}
{!! Form::textarea('presidents_agenda_comment', old('presidents_agenda_comment', $folder->evaluation->presidents_agenda_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_check', old('pdp_pip_check', $folder->evaluation->pdp_pip_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_comment', 'PDP PIP Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_check', old('ip_master_plan_check', $folder->evaluation->ip_master_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}





{!! Form::label('ip_master_plan_comment', 'IP Master Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_check', old('strategic_plan_check', $folder->evaluation->strategic_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_comment', 'Strategic Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_check', old('workflow_framework_check', $folder->evaluation->workflow_framework_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_comment', 'Workflow Framework Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_check', old('building_blocks_check', $folder->evaluation->building_blocks_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_comment', 'Building Blocks Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_comment', old('building_blocks_comment', $folder->evaluation->building_blocks_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_check', old('strategic_directions_check', $folder->evaluation->strategic_directions_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_comment', 'Strategic Directions Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment), ['class' => 'form-control', 'rows' => 1]) !!}





{!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_check', old('prexc_check', $folder->evaluation->prexc_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_comment', 'PREXC Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_check', old('sdg_check', $folder->evaluation->sdg_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_comment', 'SDG Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_check', old('signature_check', $folder->evaluation->signature_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_comment', 'Signature Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_check', 'PDP PIP Check', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_check', old('pdp_pip_check', $folder->evaluation->pdp_pip_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('pdp_pip_comment', 'PDP PIP Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('pdp_pip_comment', old('pdp_pip_comment', $folder->evaluation->pdp_pip_comment), ['class' => 'form-control', 'rows' => 1]) !!}









{!! Form::label('ip_master_plan_check', 'IP Master Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_check', old('ip_master_plan_check', $folder->evaluation->ip_master_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('ip_master_plan_comment', 'IP Master Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('ip_master_plan_comment', old('ip_master_plan_comment', $folder->evaluation->ip_master_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_check', 'Strategic Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_check', old('strategic_plan_check', $folder->evaluation->strategic_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_plan_comment', 'Strategic Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_plan_comment', old('strategic_plan_comment', $folder->evaluation->strategic_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_check', 'Workflow Framework Check', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_check', old('workflow_framework_check', $folder->evaluation->workflow_framework_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('workflow_framework_comment', 'Workflow Framework Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('workflow_framework_comment', old('workflow_framework_comment', $folder->evaluation->workflow_framework_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_check', 'Building Blocks Check', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_check', old('building_blocks_check', $folder->evaluation->building_blocks_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('building_blocks_comment', 'Building Blocks Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('building_blocks_comment', old('building_blocks_comment', $folder->evaluation->building_blocks_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('strategic_directions_check', 'Strategic Directions Check', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_check', old('strategic_directions_check', $folder->evaluation->strategic_directions_check), ['class' => 'form-control', 'rows' => 1]) !!}






{!! Form::label('strategic_directions_comment', 'Strategic Directions Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('strategic_directions_comment', old('strategic_directions_comment', $folder->evaluation->strategic_directions_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_check', 'PREXC Check', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_check', old('prexc_check', $folder->evaluation->prexc_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('prexc_comment', 'PREXC Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('prexc_comment', old('prexc_comment', $folder->evaluation->prexc_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_check', 'SDG Check', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_check', old('sdg_check', $folder->evaluation->sdg_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('sdg_comment', 'SDG Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('sdg_comment', old('sdg_comment', $folder->evaluation->sdg_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_check', 'Signature Check', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_check', old('signature_check', $folder->evaluation->signature_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('signature_comment', 'Signature Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('signature_comment', old('signature_comment', $folder->evaluation->signature_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('procurement_management_plan_check', 'Procurement Management Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_check', old('procurement_management_plan_check', $folder->evaluation->procurement_management_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('procurement_management_plan_comment', 'Procurement Management Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('procurement_management_plan_comment', old('procurement_management_plan_comment', $folder->evaluation->procurement_management_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}







{!! Form::label('implementation_plan_check', 'Implementation Plan Check', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_check', old('implementation_plan_check', $folder->evaluation->implementation_plan_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('implementation_plan_comment', 'Implementation Plan Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('implementation_plan_comment', old('implementation_plan_comment', $folder->evaluation->implementation_plan_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('expenditure_summary_check', 'Expenditure Summary Check', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_check', old('expenditure_summary_check', $folder->evaluation->expenditure_summary_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('expenditure_summary_comment', 'Expenditure Summary Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('expenditure_summary_comment', old('expenditure_summary_comment', $folder->evaluation->expenditure_summary_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('beneficiaries_check', 'Beneficiaries Check', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_check', old('beneficiaries_check', $folder->evaluation->beneficiaries_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('beneficiaries_comment', 'Beneficiaries Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('beneficiaries_comment', old('beneficiaries_comment', $folder->evaluation->beneficiaries_comment), ['class' => 'form-control', 'rows' => 1]) !!}








{!! Form::label('project_page_photocopy_check', 'Project Page Photocopy Check', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_check', old('project_page_photocopy_check', $folder->evaluation->project_page_photocopy_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('project_page_photocopy_comment', 'Project Page Photocopy Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('project_page_photocopy_comment', old('project_page_photocopy_comment', $folder->evaluation->project_page_photocopy_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('plan_materials_map_check', 'Plan Materials Map Check', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_check', old('plan_materials_map_check', $folder->evaluation->plan_materials_map_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('plan_materials_map_comment', 'Plan Materials Map Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('plan_materials_map_comment', old('plan_materials_map_comment', $folder->evaluation->plan_materials_map_comment), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('return_on_investment_check', 'Return on Investment Check', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_check', old('return_on_investment_check', $folder->evaluation->return_on_investment_check), ['class' => 'form-control', 'rows' => 1]) !!}

{!! Form::label('return_on_investment_comment', 'Return on Investment Comment', ['class' => 'control-label']) !!}
{!! Form::textarea('return_on_investment_comment', old('return_on_investment_comment', $folder->evaluation->return_on_investment_comment), ['class' => 'form-control', 'rows' => 1]) !!}

