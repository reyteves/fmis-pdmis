<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Folder;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFoldersRequest;
use App\Http\Requests\Admin\UpdateFoldersRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request as NRequest;

use App\Project;
use App\Signature;
use App\Attachment;
use App\Site;
use App\Budget;
use App\Evaluation;
use App\Beneficiaries;
use App\Stakeholders;
use App\Proponents;
use App\Implementers;

class FoldersController extends Controller
{

    public function getFolderCount(Request $request)
    {
       

        $foldersCount = Folder::count();
        return response()->json(['count' => $foldersCount]);
    }


    public function proposedCount(Request $request)
    {
        // $proposedCount = Budget::count();
        $projectStatus = 'proposed'; // Value to match in the project_basis column
        $proposedCount = Budget::where('project_status', $projectStatus)->count();
        return response()->json(['count' => $proposedCount]);
    }
    public function ongoingCount(Request $request)
    {
        // $proposedCount = Budget::count();
        $projectStatus = 'on-going'; // Value to match in the project_basis column
        $ongoingCount = Budget::where('project_status', $projectStatus)->count();
        return response()->json(['count' => $ongoingCount]);
    }
    public function continuingCount(Request $request)
    {
        // $proposedCount = Budget::count();
        $projectStatus = 'continuing'; // Value to match in the project_basis column
        $continuingCount = Budget::where('project_status', $projectStatus)->count();
        return response()->json(['count' => $continuingCount]);
    }
    public function terminatingCount(Request $request)
    {
        // $proposedCount = Budget::count();
        $projectStatus = 'terminating'; // Value to match in the project_basis column
        $terminatingCount = Budget::where('project_status', $projectStatus)->count();
        return response()->json(['count' => $terminatingCount]);
    }
    public function coordinatedCount(Request $request)
    {
        // $proposedCount = Budget::count();
        $projectStatus = 'coordinated'; // Value to match in the project_basis column
        $coordinatedCount = Budget::where('project_status', $projectStatus)->count();
        return response()->json(['count' => $coordinatedCount]);
    }

    /**
     * Display a listing of Folder.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if (!Gate::allows('folder_access')) {
            return abort(401);
        }
        $user = Auth::user();

        $folders = Folder::query(); // Initialize the query builder

        if ($filterBy = request('filter')) {
            if ($filterBy == 'all') {
                Session::put('Folder.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('Folder.filter', 'my');
            } else {
                $folders = Folder::all();
            }
        }

        if (request('show_deleted') == 1) {
            if (!Gate::allows('folder_delete')) {
                return abort(401);
            }
            $folders = $folders->onlyTrashed();
        }
        // else {
        //     $folders = $folders->withTrashed();
        // }

        if (request('same_region') == 1) {
            $userRegion = $user->region;
            $folders = $folders->whereHas('site', function ($query) use ($userRegion) {
                $query->where('region', $userRegion);
            });
        }

        if (request('same_province') == 1) {
            $userProvince = $user->province;
            $folders = $folders->whereHas('site', function ($query) use ($userProvince) {
                $query->where('province', $userProvince);
            });
        }

        // if (request('same_office') == 1) {
        //     $userOffice = $user->office;
        //     $evaluation = $folder->evaluation  
        //     $evaluation = $evaluation ->whereHas('office_evaluator', function ($query) use ($userOffice) {
        //         $query->where('office', $userOffice);
        //     });
        //     }

        if (request('same_office') == 1) {
            $userOffice = $user->office;

            // dd($user->office);

            $folders = $folders->whereHas('evaluation', function ($query) use ($userOffice) {
                $query->where('office_evaluator', $userOffice);
            });
        }



        // Retrieve the count of folders
        $foldersCount = $folders->count();

        // Get the final collection of folders
        $folders = $folders->get();

        return view('admin.folders.index', compact('folders', 'foldersCount'));
    }


    /**
     * Show the form for creating new Folder.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        if (!Gate::allows('folder_create')) {
            return abort(401);
        }

        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.folders.create', compact('created_bies'));
    }

    /**
     * Store a newly created Folder in storage.
     *
     * @param  \App\Http\Requests\StoreFoldersRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreFoldersRequest $request)
    {
        if (!Gate::allows('folder_create')) {
            return abort(401);
        }

        $folder = Folder::create($request->all());

        // save project details
        $project = Project::create([
            'name' => $folder->name,
            'description' => $request->input('description'),
            'background_and_rationale' => $request->input('background_and_rationale'),
            'objectives' => $request->input('objectives'),
            'project_implementation' => $request->input('project_implementation'),
            'monitoring_evaluation' => $request->input('monitoring_evaluation'),
            'potential_risk' => $request->input('potential_risk'),
            'sustainability_plan' => $request->input('sustainability_plan'),
            'id' => $folder->id,
        ]);

        // Associate the project with the folder
        $folder->project()->associate($project);

        // save signature
        $signature = Signature::create([
            'prepared_by_checkbox' => $request->has('prepared_by_checkbox') ? 'checked' : 'unchecked',
            'prepared_by_input' => $request->input('prepared_by_input'),
            'evaluated_by_checkbox' => $request->has('evaluated_by_checkbox') ? 'checked' : 'unchecked',
            'evaluated_by_input' => $request->input('evaluated_by_input'),
            'confirmed_by_checkbox' => $request->has('confirmed_by_checkbox') ? 'checked' : 'unchecked',
            'confirmed_by_input' => $request->input('confirmed_by_input'),
            'validated_by_checkbox' => $request->has('validated_by_checkbox') ? 'checked' : 'unchecked',
            'validated_by_input' => $request->input('validated_by_input'),
            'endorsed_by_checkbox' => $request->has('endorsed_by_checkbox') ? 'checked' : 'unchecked',
            'endorsed_by_input' => $request->input('endorsed_by_input'),
            'recommended_by_checkbox' => $request->has('recommended_by_checkbox') ? 'checked' : 'unchecked',
            'recommended_by_input' => $request->input('recommended_by_input'),
            'approved_by_checkbox' => $request->has('approved_by_checkbox') ? 'checked' : 'unchecked',
            'approved_by_input' => $request->input('approved_by_input'),
            'id' => $folder->id,
        ]);

        // Associate the signature with the folder
        $folder->signature()->associate($signature);

        $attachment = Attachment::create([
            'ppmp' => $request->has('ppmp') ? 'checked' : 'unchecked',
            'implementation_plan' => $request->has('implementation_plan') ? 'checked' : 'unchecked',
            'summary_of_expenditures' => $request->has('summary_of_expenditures') ? 'checked' : 'unchecked',
            'list_of_beneficiaries' => $request->has('list_of_beneficiaries') ? 'checked' : 'unchecked',
            'other_attachments' => $request->has('other_attachments') ? 'checked' : 'unchecked',
            'id' => $folder->id,
        ]);

        // Associate the attachment with the folder
        $folder->attachment()->associate($attachment);


        $site = Site::create([
            'region' => $request->input('region'),
            'congressional_district' => $request->input('congressional_district'),
            'province' => $request->input('province'),
            'municipality' => $request->input('municipality'),
            'barangay' => $request->input('barangay'),
            'street_address' => $request->input('street_address'),
            'cadt_calt' => $request->input('cadt_calt'),
            'ad_name' => $request->input('ad_name'),
            'id' => $folder->id,
        ]);

        // Associate the attachment with the folder
        $folder->site()->associate($site);


        $budget = Budget::create([
            'project_status' => $request->input('project_status'),
            'implementation_mode' => $request->input('implementation_mode'),
            'project_basis' => $request->input('project_basis'),
            'total_project_cost' => $request->input('total_project_cost'),
            'direct_cost' => $request->input('direct_cost'),
            'indirect_cost' => $request->input('indirect_cost'),
            'source_of_fund' => $request->input('source_of_fund'),
            'budget_year' => $request->input('budget_year'),
            'core_program' => $request->input('core_program'),
            'sub_program' => $request->input('sub_program'),
            'target_date_start' => $request->input('target_date_start'),
            'target_date_completion' => $request->input('target_date_completion'),
            'id' => $folder->id,
        ]);

        $folder->budget()->associate($budget);


        $evaluation = Evaluation::create([

            'format_check' => $request->input('format_check'),
            'format_comment' => $request->input('format_comment'),

            'provincial_evaluation_check' => $request->input('provincial_evaluation_check'),
            'provincial_evaluation_comment' => $request->input('provincial_evaluation_comment'),

            'regional_validation_check' => $request->input('regional_validation_check'),
            'regional_validation_comment' => $request->input('regional_validation_comment'),

            'general_information_check' => $request->input('general_information_check'),
            'general_information_comment' => $request->input('general_information_comment'),

            'background_and_rationale_check' => $request->input('background_and_rationale_check'),
            'background_and_rationale_comment' => $request->input('background_and_rationale_comment'),


            'objectives_check' => $request->input('objectives_check'),
            'objectives_comment' => $request->input('objectives_comment'),

            'project_description_check' => $request->input('project_description_check'),
            'project_description_comment' => $request->input('project_description_comment'),

            'implementation_strategies_check' => $request->input('implementation_strategies_check'),
            'implementation_strategies_comment' => $request->input('implementation_strategies_comment'),

            'sustainability_plan_check' => $request->input('sustainability_plan_check'),
            'sustainability_plan_comment' => $request->input('sustainability_plan_comment'),

            'budgetary_requirements_check' => $request->input('budgetary_requirements_check'),
            'budgetary_requirements_comment' => $request->input('budgetary_requirements_comment'),

            'attachments_check' => $request->input('attachments_check'),
            'attachments_comment' => $request->input('attachments_comment'),

            'signatories_check' => $request->input('signatories_check'),
            'signatories_comment' => $request->input('signatories_comment'),

            'ipra_rights_check' => $request->input('ipra_rights_check'),
            'ipra_rights_comment' => $request->input('ipra_rights_comment'),

            'presidents_agenda_check' => $request->input('presidents_agenda_check'),
            'presidents_agenda_comment' => $request->input('presidents_agenda_comment'),


            'pdp_pip_check' => $request->input('pdp_pip_check'),
            'pdp_pip_comment' => $request->input('pdp_pip_comment'),

            'ip_master_plan_check' => $request->input('ip_master_plan_check'),
            'ip_master_plan_comment' => $request->input('ip_master_plan_comment'),

            'strategic_plan_check' => $request->input('strategic_plan_check'),
            'strategic_plan_comment' => $request->input('strategic_plan_comment'),

            'workflow_framework_check' => $request->input('workflow_framework_check'),
            'workflow_framework_comment' => $request->input('workflow_framework_comment'),

            'building_blocks_check' => $request->input('building_blocks_check'),
            'building_blocks_comment' => $request->input('building_blocks_comment'),

            'strategic_directions_check' => $request->input('strategic_directions_check'),
            'strategic_directions_comment' => $request->input('strategic_directions_comment'),

            'prexc_check' => $request->input('prexc_check'),
            'prexc_comment' => $request->input('prexc_comment'),

            'sdg_check' => $request->input('sdg_check'),
            'sdg_comment' => $request->input('sdg_comment'),

            'signature_check' => $request->input('signature_check'),
            'signature_comment' => $request->input('signature_comment'),

            'procurement_management_plan_check' => $request->input('procurement_management_plan_check'),
            'procurement_management_plan_comment' => $request->input('procurement_management_plan_comment'),

            'implementation_plan_check' => $request->input('implementation_plan_check'),
            'implementation_plan_comment' => $request->input('implementation_plan_comment'),

            'expenditure_summary_check' => $request->input('expenditure_summary_check'),
            'expenditure_summary_comment' => $request->input('expenditure_summary_comment'),

            'beneficiaries_check' => $request->input('beneficiaries_check'),
            'beneficiaries_comment' => $request->input('beneficiaries_comment'),

            'project_page_photocopy_check' => $request->input('project_page_photocopy_check'),
            'project_page_photocopy_comment' => $request->input('project_page_photocopy_comment'),

            'plan_materials_map_check' => $request->input('plan_materials_map_check'),
            'plan_materials_map_comment' => $request->input('plan_materials_map_comment'),

            'return_on_investment_check' => $request->input('return_on_investment_check'),
            'return_on_investment_comment' => $request->input('return_on_investment_comment'),

            'evaluation_project_title' => $request->input('evaluation_project_title'),
            'location' => $request->input('location'),
            'cost_and_source' => $request->input('cost_and_source'),
            'period_of_implementation' => $request->input('period_of_implementation'),
            'no_of_beneficiaries' => $request->input('no_of_beneficiaries'),
            'synopsis' => $request->input('synopsis'),
            'bureau_director_name' => $request->input('bureau_director_name'),
            'bureau_director_designation' => $request->input('bureau_director_designation'),

            'id' => $folder->id,
        ]);

        $folder->evaluation()->associate($evaluation);


        $beneficiaries = Beneficiaries::create([
            'ip_group_total' => $request->input('ip_group_total'),
            'ip_group_male' => $request->input('ip_group_male'),
            'ip_group_female' => $request->input('ip_group_female'),
            'pwd_total' => $request->input('pwd_total'),
            'pwd_male' => $request->input('pwd_male'),
            'pwd_female' => $request->input('pwd_female'),
            'children_total' => $request->input('children_total'),
            'children_male' => $request->input('children_male'),
            'children_female' => $request->input('children_female'),
            'youth_total' => $request->input('youth_total'),
            'youth_male' => $request->input('youth_male'),
            'youth_female' => $request->input('youth_female'),
            'adult_total' => $request->input('adult_total'),
            'adult_male' => $request->input('adult_male'),
            'adult_female' => $request->input('adult_female'),
            'older_total' => $request->input('older_total'),
            'older_male' => $request->input('older_male'),
            'older_female' => $request->input('older_female'),
            'id' => $folder->id,
        ]);

        $folder->beneficiaries()->associate($beneficiaries);

        $stakeholders = Stakeholders::create([
            'stakeholder_name' => $request->input('stakeholder_name'),
            'stakeholder_office' => $request->input('stakeholder_office'),
            'stakeholder_address' => $request->input('stakeholder_address'),
            'stakeholder_number' => $request->input('stakeholder_number'),
            'stakeholder_name2' => $request->input('stakeholder_name2'),
            'stakeholder_office2' => $request->input('stakeholder_office2'),
            'stakeholder_address2' => $request->input('stakeholder_address2'),
            'stakeholder_number2' => $request->input('stakeholder_number2'),
            'stakeholder_name3' => $request->input('stakeholder_name3'),
            'stakeholder_office3' => $request->input('stakeholder_office3'),
            'stakeholder_address3' => $request->input('stakeholder_address3'),
            'stakeholder_number3' => $request->input('stakeholder_number3'),
            'stakeholder_name4' => $request->input('stakeholder_name4'),
            'stakeholder_office4' => $request->input('stakeholder_office4'),
            'stakeholder_address4' => $request->input('stakeholder_address4'),
            'stakeholder_number4' => $request->input('stakeholder_number4'),

            'id' => $folder->id,
        ]);

        $folder->stakeholders()->associate($stakeholders);

        $proponents = Proponents::create([
            'proponent_name' => $request->input('proponent_name'),
            'proponent_office' => $request->input('proponent_office'),
            'proponent_address' => $request->input('proponent_address'),
            'proponent_number' => $request->input('proponent_number'),
            'proponent_name2' => $request->input('proponent_name2'),
            'proponent_office2' => $request->input('proponent_office2'),
            'proponent_address2' => $request->input('proponent_address2'),
            'proponent_number2' => $request->input('proponent_number2'),
            'proponent_name3' => $request->input('proponent_name3'),
            'proponent_office3' => $request->input('proponent_office3'),
            'proponent_address3' => $request->input('proponent_address3'),
            'proponent_number3' => $request->input('proponent_number3'),
            'proponent_name4' => $request->input('proponent_name4'),
            'proponent_office4' => $request->input('proponent_office4'),
            'proponent_address4' => $request->input('proponent_address4'),
            'proponent_number4' => $request->input('proponent_number4'),

            'id' => $folder->id,
        ]);

        $folder->proponents()->associate($proponents);

        $implementers = Implementers::create([
            'implementer_name' => $request->input('implementer_name'),
            'implementer_office' => $request->input('implementer_office'),
            'implementer_address' => $request->input('implementer_address'),
            'implementer_number' => $request->input('implementer_number'),
            'implementer_name2' => $request->input('implementer_name2'),
            'implementer_office2' => $request->input('implementer_office2'),
            'implementer_address2' => $request->input('implementer_address2'),
            'implementer_number2' => $request->input('implementer_number2'),
            'implementer_name3' => $request->input('implementer_name3'),
            'implementer_office3' => $request->input('implementer_office3'),
            'implementer_address3' => $request->input('implementer_address3'),
            'implementer_number3' => $request->input('implementer_number3'),
            'implementer_name4' => $request->input('implementer_name4'),
            'implementer_office4' => $request->input('implementer_office4'),
            'implementer_address4' => $request->input('implementer_address4'),
            'implementer_number4' => $request->input('implementer_number4'),

            'id' => $folder->id,
        ]);

        $folder->implementers()->associate($implementers);

        $folder->save();

        return redirect()->route('admin.folders.index');
    }


    /**
     * Show the form for editing Folder.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('folder_edit')) {
            return abort(401);
        }

        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $folder = Folder::findOrFail($id);

        return view('admin.folders.edit', compact('folder', 'created_bies'));
    }

    public function view_ppf($id)
    {
        if (!Gate::allows('folder_edit')) {
            return abort(401);
        }

        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $folder = Folder::findOrFail($id);

        return view('admin.folders.view_ppf', compact('folder', 'created_bies'));
    }

    /**
     * Update Folder in storage.
     *
     * @param  \App\Http\Requests\UpdateFoldersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(UpdateFoldersRequest $request, $id)
    {
        // try {

        if (!Gate::allows('folder_edit')) {
            return abort(401);
        }

        $folder = Folder::findOrFail($id);

        // Update the folder name
        $folder->update($request->all());

        // Update the associated project name
        $project = $folder->project;
        if ($project) {
            $project->name = $folder->name;
            $project->description = $request->input('description');
            $project->background_and_rationale = $request->input('background_and_rationale');
            $project->objectives = $request->input('objectives');
            $project->project_implementation = $request->input('project_implementation');
            $project->monitoring_evaluation = $request->input('monitoring_evaluation');
            $project->potential_risk = $request->input('potential_risk');
            $project->sustainability_plan = $request->input('sustainability_plan');
            $project->save();
        }

        $signature = $folder->signature;
        if ($signature) {
            $signature->prepared_by_checkbox = $request->has('prepared_by_checkbox') ? 'checked' : 'unchecked';
            $signature->prepared_by_input = $request->input('prepared_by_input');
            $signature->evaluated_by_checkbox = $request->has('evaluated_by_checkbox') ? 'checked' : 'unchecked';
            $signature->evaluated_by_input = $request->input('evaluated_by_input');
            $signature->confirmed_by_checkbox = $request->has('confirmed_by_checkbox') ? 'checked' : 'unchecked';
            $signature->confirmed_by_input = $request->input('confirmed_by_input');
            $signature->validated_by_checkbox = $request->has('validated_by_checkbox') ? 'checked' : 'unchecked';
            $signature->validated_by_input = $request->input('validated_by_input');
            $signature->endorsed_by_checkbox = $request->has('endorsed_by_checkbox') ? 'checked' : 'unchecked';
            $signature->endorsed_by_input = $request->input('endorsed_by_input');
            $signature->recommended_by_checkbox = $request->has('recommended_by_checkbox') ? 'checked' : 'unchecked';
            $signature->recommended_by_input = $request->input('recommended_by_input');
            $signature->approved_by_checkbox = $request->has('approved_by_checkbox') ? 'checked' : 'unchecked';
            $signature->approved_by_input = $request->input('approved_by_input');
            $signature->save();
        }

        $attachment = $folder->attachment;
        if ($attachment) {
            $attachment->ppmp = $request->has('ppmp') ? 'checked' : 'unchecked';
            $attachment->implementation_plan = $request->has('implementation_plan') ? 'checked' : 'unchecked';
            $attachment->summary_of_expenditures = $request->has('summary_of_expenditures') ? 'checked' : 'unchecked';
            $attachment->list_of_beneficiaries = $request->has('list_of_beneficiaries') ? 'checked' : 'unchecked';
            $attachment->other_attachments = $request->has('other_attachments') ? 'checked' : 'unchecked';
            $attachment->save();
        }

        $site = $folder->site;
        if ($site) {
            $site->region = $request->input('region');
            $site->congressional_district = $request->input('congressional_district');
            $site->province = $request->input('province');
            $site->municipality = $request->input('municipality');
            $site->barangay = $request->input('barangay');
            $site->street_address = $request->input('street_address');
            $site->cadt_calt = $request->input('cadt_calt');
            $site->ad_name = $request->input('ad_name');
            $site->save();
        }

        $budget = $folder->budget;
        if ($budget) {
            $budget->project_status = $request->input('project_status');
            $budget->implementation_mode = $request->input('implementation_mode');
            $budget->project_basis = $request->input('project_basis');
            $budget->total_project_cost = $request->input('total_project_cost');
            $budget->direct_cost = $request->input('direct_cost');
            $budget->indirect_cost = $request->input('indirect_cost');
            $budget->source_of_fund = $request->input('source_of_fund');
            $budget->budget_year = $request->input('budget_year');
            $budget->core_program = $request->input('core_program');
            $budget->sub_program = $request->input('sub_program');
            $budget->target_date_start = $request->input('target_date_start');
            $budget->target_date_completion = $request->input('target_date_completion');
            $budget->save();
        }



        $evaluation = $folder->evaluation;
        if ($evaluation) {
            $evaluation->format_check = $request->input('format_check');
            $evaluation->format_comment = $request->input('format_comment');

            $evaluation->provincial_evaluation_check = $request->input('provincial_evaluation_check');
            $evaluation->provincial_evaluation_comment = $request->input('provincial_evaluation_comment');
            $evaluation->regional_validation_check = $request->input('regional_validation_check');
            $evaluation->regional_validation_comment = $request->input('regional_validation_comment');
            $evaluation->general_information_check = $request->input('general_information_check');
            $evaluation->general_information_comment = $request->input('general_information_comment');
            $evaluation->background_and_rationale_check = $request->input('background_and_rationale_check');
            $evaluation->background_and_rationale_comment = $request->input('background_and_rationale_comment');
            $evaluation->objectives_check = $request->input('objectives_check');
            $evaluation->objectives_comment = $request->input('objectives_comment');

            $evaluation->project_description_check = $request->input('project_description_check');
            $evaluation->project_description_comment = $request->input('project_description_comment');
            $evaluation->implementation_strategies_check = $request->input('implementation_strategies_check');
            $evaluation->implementation_strategies_comment = $request->input('implementation_strategies_comment');
            $evaluation->sustainability_plan_check = $request->input('sustainability_plan_check');
            $evaluation->sustainability_plan_comment = $request->input('sustainability_plan_comment');
            $evaluation->budgetary_requirements_check = $request->input('budgetary_requirements_check');
            $evaluation->budgetary_requirements_comment = $request->input('budgetary_requirements_comment');
            $evaluation->attachments_check = $request->input('attachments_check');
            $evaluation->attachments_comment = $request->input('attachments_comment');

            $evaluation->signatories_check = $request->input('signatories_check');
            $evaluation->signatories_comment = $request->input('signatories_comment');
            $evaluation->ipra_rights_check = $request->input('ipra_rights_check');
            $evaluation->ipra_rights_comment = $request->input('ipra_rights_comment');
            $evaluation->presidents_agenda_check = $request->input('presidents_agenda_check');
            $evaluation->presidents_agenda_comment = $request->input('presidents_agenda_comment');


            $evaluation->pdp_pip_check = $request->input('pdp_pip_check');
            $evaluation->pdp_pip_comment = $request->input('pdp_pip_comment');
            $evaluation->ip_master_plan_check = $request->input('ip_master_plan_check');
            $evaluation->ip_master_plan_comment = $request->input('ip_master_plan_comment');
            $evaluation->strategic_plan_check = $request->input('strategic_plan_check');
            $evaluation->strategic_plan_comment = $request->input('strategic_plan_comment');
            $evaluation->workflow_framework_check = $request->input('workflow_framework_check');
            $evaluation->workflow_framework_comment = $request->input('workflow_framework_comment');

            $evaluation->building_blocks_check = $request->input('building_blocks_check');
            $evaluation->building_blocks_comment = $request->input('building_blocks_comment');
            $evaluation->strategic_directions_check = $request->input('strategic_directions_check');
            $evaluation->strategic_directions_comment = $request->input('strategic_directions_comment');
            $evaluation->prexc_check = $request->input('prexc_check');
            $evaluation->prexc_comment = $request->input('prexc_comment');
            $evaluation->sdg_check = $request->input('sdg_check');
            $evaluation->sdg_comment = $request->input('sdg_comment');
            $evaluation->signature_check = $request->input('signature_check');
            $evaluation->signature_comment = $request->input('signature_comment');
            $evaluation->procurement_management_plan_check = $request->input('procurement_management_plan_check');
            $evaluation->procurement_management_plan_comment = $request->input('procurement_management_plan_comment');

            $evaluation->implementation_plan_check = $request->input('implementation_plan_check');
            $evaluation->implementation_plan_comment = $request->input('implementation_plan_comment');
            $evaluation->expenditure_summary_check = $request->input('expenditure_summary_check');
            $evaluation->expenditure_summary_comment = $request->input('expenditure_summary_comment');
            $evaluation->beneficiaries_check = $request->input('beneficiaries_check');
            $evaluation->beneficiaries_comment = $request->input('beneficiaries_comment');
            $evaluation->project_page_photocopy_check = $request->input('project_page_photocopy_check');
            $evaluation->project_page_photocopy_comment = $request->input('project_page_photocopy_comment');
            $evaluation->plan_materials_map_check = $request->input('plan_materials_map_check');
            $evaluation->plan_materials_map_comment = $request->input('plan_materials_map_comment');
            $evaluation->return_on_investment_check = $request->input('return_on_investment_check');
            $evaluation->return_on_investment_comment = $request->input('return_on_investment_comment');

            $evaluation->evaluation_project_title = $request->input('evaluation_project_title');
            $evaluation->location = $request->input('location');
            $evaluation->cost_and_source = $request->input('cost_and_source');
            $evaluation->period_of_implementation = $request->input('period_of_implementation');
            $evaluation->no_of_beneficiaries = $request->input('no_of_beneficiaries');
            $evaluation->synopsis = $request->input('synopsis');
            $evaluation->bureau_director_name = $request->input('bureau_director_name');
            $evaluation->bureau_director_designation = $request->input('bureau_director_designation');

            $evaluation->office_evaluator = $request->input('office_evaluator');

            $evaluation->save();
        }

        $beneficiaries = $folder->beneficiaries;

        if ($beneficiaries) {
            $beneficiaries->ip_group_total = $request->input('ip_group_total');
            $beneficiaries->ip_group_male = $request->input('ip_group_male');
            $beneficiaries->ip_group_female = $request->input('ip_group_female');
            $beneficiaries->pwd_total = $request->input('pwd_total');
            $beneficiaries->pwd_male = $request->input('pwd_male');
            $beneficiaries->pwd_female = $request->input('pwd_female');
            $beneficiaries->children_total = $request->input('children_total');
            $beneficiaries->children_male = $request->input('children_male');
            $beneficiaries->children_female = $request->input('children_female');
            $beneficiaries->youth_total = $request->input('youth_total');
            $beneficiaries->youth_male = $request->input('youth_male');
            $beneficiaries->youth_female = $request->input('youth_female');
            $beneficiaries->adult_total = $request->input('adult_total');
            $beneficiaries->adult_male = $request->input('adult_male');
            $beneficiaries->adult_female = $request->input('adult_female');
            $beneficiaries->older_total = $request->input('older_total');
            $beneficiaries->older_male = $request->input('older_male');
            $beneficiaries->older_female = $request->input('older_female');
            $beneficiaries->save();
        }

        $stakeholders = $folder->stakeholders;

        if ($stakeholders) {
            $stakeholders->stakeholder_name = $request->input('stakeholder_name');
            $stakeholders->stakeholder_office = $request->input('stakeholder_office');
            $stakeholders->stakeholder_address = $request->input('stakeholder_address');
            $stakeholders->stakeholder_number = $request->input('stakeholder_number');

            $stakeholders->stakeholder_name2 = $request->input('stakeholder_name2');
            $stakeholders->stakeholder_office2 = $request->input('stakeholder_office2');
            $stakeholders->stakeholder_address2 = $request->input('stakeholder_address2');
            $stakeholders->stakeholder_number2 = $request->input('stakeholder_number2');

            $stakeholders->stakeholder_name3 = $request->input('stakeholder_name3');
            $stakeholders->stakeholder_office3 = $request->input('stakeholder_office3');
            $stakeholders->stakeholder_address3 = $request->input('stakeholder_address3');
            $stakeholders->stakeholder_number3 = $request->input('stakeholder_number3');

            $stakeholders->stakeholder_name4 = $request->input('stakeholder_name4');
            $stakeholders->stakeholder_office4 = $request->input('stakeholder_office4');
            $stakeholders->stakeholder_address4 = $request->input('stakeholder_address4');
            $stakeholders->stakeholder_number4 = $request->input('stakeholder_number4');

            $stakeholders->save();
        }

        $proponents = $folder->proponents;

        if ($proponents) {
            $proponents->proponent_name = $request->input('proponent_name');
            $proponents->proponent_office = $request->input('proponent_office');
            $proponents->proponent_address = $request->input('proponent_address');
            $proponents->proponent_number = $request->input('proponent_number');

            $proponents->proponent_name2 = $request->input('proponent_name2');
            $proponents->proponent_office2 = $request->input('proponent_office2');
            $proponents->proponent_address2 = $request->input('proponent_address2');
            $proponents->proponent_number2 = $request->input('proponent_number2');

            $proponents->proponent_name3 = $request->input('proponent_name3');
            $proponents->proponent_office3 = $request->input('proponent_office3');
            $proponents->proponent_address3 = $request->input('proponent_address3');
            $proponents->proponent_number3 = $request->input('proponent_number3');

            $proponents->proponent_name4 = $request->input('proponent_name4');
            $proponents->proponent_office4 = $request->input('proponent_office4');
            $proponents->proponent_address4 = $request->input('proponent_address4');
            $proponents->proponent_number4 = $request->input('proponent_number4');

            $proponents->save();
        }

        $implementers = $folder->implementers;

        if ($implementers) {
            $implementers->implementer_name = $request->input('implementer_name');
            $implementers->implementer_office = $request->input('implementer_office');
            $implementers->implementer_address = $request->input('implementer_address');
            $implementers->implementer_number = $request->input('implementer_number');

            $implementers->implementer_name2 = $request->input('implementer_name2');
            $implementers->implementer_office2 = $request->input('implementer_office2');
            $implementers->implementer_address2 = $request->input('implementer_address2');
            $implementers->implementer_number2 = $request->input('implementer_number2');

            $implementers->implementer_name3 = $request->input('implementer_name3');
            $implementers->implementer_office3 = $request->input('implementer_office3');
            $implementers->implementer_address3 = $request->input('implementer_address3');
            $implementers->implementer_number3 = $request->input('implementer_number3');

            $implementers->implementer_name4 = $request->input('implementer_name4');
            $implementers->implementer_office4 = $request->input('implementer_office4');
            $implementers->implementer_address4 = $request->input('implementer_address4');
            $implementers->implementer_number4 = $request->input('implementer_number4');

            $implementers->save();
        }


        return redirect()->route('admin.folders.index');
    }


    /**
     * Display Folder.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('folder_view')) {
            return abort(401);
        }

        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $files = \App\File::where('folder_id', $id)->get();

        $folder = Folder::findOrFail($id);
        $userFilesCount = File::where('created_by_id', Auth::getUser()->id)->count();

        return view('admin.folders.show', compact('folder', 'files', 'userFilesCount'));
    }


    /**
     * Remove Folder from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }
        $folder = Folder::findOrFail($id);


        $folder->delete();

        return redirect()->route('admin.folders.index');
    }

    /**
     * Delete all selected Folder at once.
     *
     * @param Request $request
     */

    public function massDestroy(NRequest $request)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $folders = Folder::whereIn('id', $request->input('ids'))->get();

            foreach ($folders as $folder) {

                $folder->delete();
            }
        }

        return redirect()->route('admin.folders.index');
    }

    /**
     * Restore Folder from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function restore($id)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }

        $folder = Folder::onlyTrashed()->findOrFail($id);


        $folder->restore();

        return redirect()->route('admin.folders.index');
    }

    /**
     * Permanently delete Folder from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function perma_del($id)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }
        $folder = Folder::onlyTrashed()->findOrFail($id);

        $project = $folder->project;
        if ($project) {
            $project->delete();
        }

        $signature = $folder->signature;
        if ($signature) {
            $signature->delete();
        }

        $attachment = $folder->attachment;
        if ($attachment) {
            $attachment->delete();
        }

        $site = $folder->site;
        if ($site) {
            $site->delete();
        }

        $budget = $folder->budget;
        if ($budget) {
            $budget->delete();
        }

        $evaluation = $folder->evaluation;
        if ($evaluation) {
            $evaluation->delete();
        }

        $beneficiaries = $folder->beneficiaries;
        if ($beneficiaries) {
            $beneficiaries->delete();
        }

        $stakeholders = $folder->stakeholders;
        if ($stakeholders) {
            $stakeholders->delete();
        }

        $proponents = $folder->proponents;
        if ($proponents) {
            $proponents->delete();
        }

        $implementers = $folder->implementers;
        if ($implementers) {
            $implementers->delete();
        }

        $folder->forceDelete();

        return redirect()->route('admin.folders.index');
    }
}
