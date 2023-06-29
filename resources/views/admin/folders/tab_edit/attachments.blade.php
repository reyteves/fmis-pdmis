<div class="form-check">
    {!! Form::checkbox('ppmp', 'ppmp', old('ppmp', $folder->attachment->ppmp), ['class' => 'form-check-input', 'id' => 'ppmp']) !!}
    {!! Form::label('ppmp', 'Project Procurement Management Plan (PPMP)– PPF 1a (Annex B)', ['class' => 'form-check-label']) !!}
</div>
<div class="form-check">
    {!! Form::checkbox('implementation_plan', 'implementation_plan', old('implementation_plan', $folder->attachment->implementation_plan), ['class' => 'form-check-input', 'id' => 'implementation_plan']) !!}
    {!! Form::label('implementation_plan', 'Project Implementation Plan/Gantt Chart – PPF 1b (Annex C)', ['class' => 'form-check-label']) !!}
</div>
<div class="form-check">
    {!! Form::checkbox('summary_of_expenditures', 'summary_of_expenditures', old('summary_of_expenditures', $folder->attachment->summary_of_expenditures), ['class' => 'form-check-input', 'id' => 'summary_of_expenditures']) !!}
    {!! Form::label('summary_of_expenditures', 'Summary of Expenditures – PPF 1c (Annex D)', ['class' => 'form-check-label']) !!}
</div>
<div class="form-check">
    {!! Form::checkbox('list_of_beneficiaries', 'list_of_beneficiaries', old('list_of_beneficiaries', $folder->attachment->list_of_beneficiaries), ['class' => 'form-check-input', 'id' => 'list_of_beneficiaries']) !!}
    {!! Form::label('list_of_beneficiaries', 'List of Beneficiaries – PPF 1d (Annex E)', ['class' => 'form-check-label']) !!}
</div>
<div class="form-check">
    {!! Form::checkbox('other_attachments', 'other_attachments', old('other_attachments', $folder->attachment->other_attachments), ['class' => 'form-check-input', 'id' => 'other_attachments']) !!}
    {!! Form::label('other_attachments', 'Other attachments –<span> page/portion of the plan as project basis; plan, bills of materials and vicinity map for Infrastructure, Return of Investments for livelihood and other similar projects</span>', ['class' => 'form-check-label'],false) !!}
</div>
