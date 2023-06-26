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
            $project->background_and_rationale = $request->input('background_and_rationale');
            $project->objectives = $request->input('objectives');
            $project->project_implementation = $request->input('project_implementation');
            $project->monitoring_evaluation = $request->input('monitoring_evaluation');
            $project->potential_risk = $request->input('potential_risk');
            $project->sustainability_plan = $request->input('sustainability_plan');
            $project->save();
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


        // Delete the associated project
        // $project = $folder->project;
        // if ($project) {
        //     $project->delete();
        // }

        $folder->delete();

        return redirect()->route('admin.folders.index');
    }

    /**
     * Delete all selected Folder at once.
     *
     * @param Request $request
     */
    // public function massDestroy(NRequest $request)
    // {
    //     if (!Gate::allows('folder_delete')) {
    //         return abort(401);
    //     }
    //     if ($request->input('ids')) {
    //         $entries = Folder::whereIn('id', $request->input('ids'))->get();

    //         foreach ($entries as $entry) {
    //             $entry->delete();
    //         }
    //     }
    // }
    public function massDestroy(NRequest $request)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $folders = Folder::whereIn('id', $request->input('ids'))->get();

            foreach ($folders as $folder) {
                // Delete the associated project
                // $project = $folder->project;
                // if ($project) {
                //     $project->delete();
                // }

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
    // public function restore($id)
    // {
    //     if (!Gate::allows('folder_delete')) {
    //         return abort(401);
    //     }
    //     $folder = Folder::onlyTrashed()->findOrFail($id);
    //     $folder->restore();

    //     return redirect()->route('admin.folders.index');
    // }

    public function restore($id)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }

        $folder = Folder::onlyTrashed()->findOrFail($id);

        // Restore the associated project if it exists
        // $project = $folder->project;
        // if ($project) {
        //     $project->restore();
        // }

        $folder->restore();

        return redirect()->route('admin.folders.index');
    }

    /**
     * Permanently delete Folder from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function perma_del($id)
    // {
    //     if (!Gate::allows('folder_delete')) {
    //         return abort(401);
    //     }
    //     $folder = Folder::onlyTrashed()->findOrFail($id);
    //     $folder->forceDelete();

    //     return redirect()->route('admin.folders.index');
    // }
    public function perma_del($id)
    {
        if (!Gate::allows('folder_delete')) {
            return abort(401);
        }
        $folder = Folder::onlyTrashed()->findOrFail($id);

        // Delete the associated project if it exists
        // $project = $folder->project;
        // if ($project) {
        //     $project->forceDelete();
        // }

        $project = $folder->project;
        if ($project) {
            $project->delete();
        }

        $folder->forceDelete();

        return redirect()->route('admin.folders.index');
    }
}
