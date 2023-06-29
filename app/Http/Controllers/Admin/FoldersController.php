<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Folder;
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

class FoldersController extends Controller
{
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
        if ($filterBy = Request::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('Folder.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('Folder.filter', 'my');
            }
        }

        if (request('show_deleted') == 1) {
            if (!Gate::allows('folder_delete')) {
                return abort(401);
            }
            $folders = Folder::onlyTrashed()->get();
        } else {
            $folders = Folder::all();
        }

        return view('admin.folders.index', compact('folders'));
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

    /**
     * Update Folder in storage.
     *
     * @param  \App\Http\Requests\UpdateFoldersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(UpdateFoldersRequest $request, $id)
    {
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
            $project->description= $request->input('description');
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

        $folder->forceDelete();

        return redirect()->route('admin.folders.index');
    }
}
