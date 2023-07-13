<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('format_check')->nullable();
            $table->text('format_comment')->nullable();
            $table->string('provincial_evaluation_check')->nullable();
            $table->text('provincial_evaluation_comment')->nullable();
            $table->string('regional_validation_check')->nullable();
            $table->text('regional_validation_comment')->nullable();
            $table->string('general_information_check')->nullable();
            $table->text('general_information_comment')->nullable();
            $table->string('background_and_rationale_check')->nullable();
            $table->text('background_and_rationale_comment')->nullable();
            $table->string('objectives_check')->nullable();
            $table->text('objectives_comment')->nullable();
            $table->string('project_description_check')->nullable();
            $table->text('project_description_comment')->nullable();
            $table->string('implementation_strategies_check')->nullable();
            $table->text('implementation_strategies_comment')->nullable();
            $table->string('sustainability_plan_check')->nullable();
            $table->text('sustainability_plan_comment')->nullable();
            $table->string('budgetary_requirements_check')->nullable();
            $table->text('budgetary_requirements_comment')->nullable();
            $table->string('attachments_check')->nullable();
            $table->text('attachments_comment')->nullable();
            $table->string('signatories_check')->nullable();
            $table->text('signatories_comment')->nullable();
            $table->string('ipra_rights_check')->nullable();
            $table->text('ipra_rights_comment')->nullable();
            $table->string('presidents_agenda_check')->nullable();
            $table->text('presidents_agenda_comment')->nullable();
            $table->string('pdp_pip_check')->nullable();
            $table->text('pdp_pip_comment')->nullable();
            $table->string('ip_master_plan_check')->nullable();
            $table->text('ip_master_plan_comment')->nullable();
            $table->string('strategic_plan_check')->nullable();
            $table->text('strategic_plan_comment')->nullable();
            $table->string('workflow_framework_check')->nullable();
            $table->text('workflow_framework_comment')->nullable();
            $table->string('building_blocks_check')->nullable();
            $table->text('building_blocks_comment')->nullable();
            $table->string('strategic_directions_check')->nullable();
            $table->text('strategic_directions_comment')->nullable();
            $table->string('prexc_check')->nullable();
            $table->text('prexc_comment')->nullable();
            $table->string('sdg_check')->nullable();
            $table->text('sdg_comment')->nullable();
            $table->string('signature_check')->nullable();
            $table->text('signature_comment')->nullable();
            $table->string('procurement_management_plan_check')->nullable();
            $table->text('procurement_management_plan_comment')->nullable();
            $table->string('implementation_plan_check')->nullable();
            $table->text('implementation_plan_comment')->nullable();
            $table->string('expenditure_summary_check')->nullable();
            $table->text('expenditure_summary_comment')->nullable();
            $table->string('beneficiaries_check')->nullable();
            $table->text('beneficiaries_comment')->nullable();
            $table->string('project_page_photocopy_check')->nullable();
            $table->text('project_page_photocopy_comment')->nullable();
            $table->string('plan_materials_map_check')->nullable();
            $table->text('plan_materials_map_comment')->nullable();
            $table->string('return_on_investment_check')->nullable();
            $table->text('return_on_investment_comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
};
