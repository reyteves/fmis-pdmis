<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

class Evaluation extends Model
{
    protected $fillable = [
        'format_check',
        'format_comment',
        'provincial_evaluation_check',
        'provincial_evaluation_comment',
        'regional_validation_check',
        'regional_validation_comment',
        'general_information_check',
        'general_information_comment',
        'background_and_rationale_check',
        'background_and_rationale_comment',
        'objectives_check',
        'objectives_comment',
        'project_description_check',
        'project_description_comment',
        'implementation_strategies_check',
        'implementation_strategies_comment',
        'sustainability_plan_check',
        'sustainability_plan_comment',
        'budgetary_requirements_check',
        'budgetary_requirements_comment',
        'attachments_check',
        'attachments_comment',
        'signatories_check',
        'signatories_comment',
        'ipra_rights_check',
        'ipra_rights_comment',
        'presidents_agenda_check',
        'presidents_agenda_comment',
        'pdp_pip_check',
        'pdp_pip_comment',
        'ip_master_plan_check',
        'ip_master_plan_comment',
        'strategic_plan_check',
        'strategic_plan_comment',
        'workflow_framework_check',
        'workflow_framework_comment',
        'building_blocks_check',
        'building_blocks_comment',
        'strategic_directions_check',
        'strategic_directions_comment',
        'prexc_check',
        'prexc_comment',
        'sdg_check',
        'sdg_comment',
        'signature_check',
        'signature_comment',
        'procurement_management_plan_check',
        'procurement_management_plan_comment',
        'implementation_plan_check',
        'implementation_plan_comment',
        'expenditure_summary_check',
        'expenditure_summary_comment',
        'beneficiaries_check',
        'beneficiaries_comment',
        'project_page_photocopy_check',
        'project_page_photocopy_comment',
        'plan_materials_map_check',
        'plan_materials_map_comment',
        'return_on_investment_check',
        'return_on_investment_comment',
        'evaluation_project_title',
        'location',
        'cost_and_source',
        'period_of_implementation',
        'no_of_beneficiaries',
        'synopsis',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
