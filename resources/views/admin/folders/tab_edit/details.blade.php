 {{-- Project description --}}
 <div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('description', 'Project Description', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', old('description', $folder->project->description), [
            'class' => 'form-control',
            'rows' => 10,
        ]) !!}
        <p class="help-block"></p>
        @if ($errors->has('description'))
            <p class="help-block">
                {{ $errors->first('description') }}
            </p>
        @endif
    </div>
</div>
{{-- /Project description --}}

{{-- Background and Rationale --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('background_and_rationale', 'Background and Rationale', ['class' => 'control-label']) !!}
        {!! Form::textarea(
            'background_and_rationale',
            old('background_and_rationale', $folder->project->background_and_rationale),
            [
                'class' => 'form-control',
                'rows' => 10,
            ],
        ) !!}
        <p class="help-block"></p>
        @if ($errors->has('background_and_rationale'))
            <p class="help-block">
                {{ $errors->first('background_and_rationale') }}
            </p>
        @endif
    </div>
</div>
{{-- /Background and Rationale --}}

{{-- Objectives --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('objectives', 'Objectives', ['class' => 'control-label']) !!}
        {!! Form::textarea('objectives', old('objectives', $folder->project->objectives), [
            'class' => 'form-control',
            'rows' => 10,
        ]) !!}
        <p class="help-block"></p>
        @if ($errors->has('objectives'))
            <p class="help-block">
                {{ $errors->first('objectives') }}
            </p>
        @endif
    </div>
</div>
{{-- /Objectives --}}

{{-- Project Implementation --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('project_implementation', 'Project Implementation', ['class' => 'control-label']) !!}
        {!! Form::textarea(
            'project_implementation',
            old('project_implementation', $folder->project->project_implementation),
            [
                'class' => 'form-control',
                'rows' => 10,
            ],
        ) !!}
        <p class="help-block"></p>
        @if ($errors->has('project_implementation'))
            <p class="help-block">
                {{ $errors->first('project_implementation') }}
            </p>
        @endif
    </div>
</div>
{{-- /Project Implementation --}}

{{-- Monitoring and Evaluation --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('monitoring_evaluation', 'Monitoring and Evaluation', ['class' => 'control-label']) !!}
        {!! Form::textarea(
            'monitoring_evaluation',
            old('monitoring_evaluation', $folder->project->monitoring_evaluation),
            [
                'class' => 'form-control',
                'rows' => 10,
            ],
        ) !!}
        <p class="help-block"></p>
        @if ($errors->has('monitoring_evaluation'))
            <p class="help-block">
                {{ $errors->first('monitoring_evaluation') }}
            </p>
        @endif
    </div>
</div>
{{-- /Monitoring and Evaluation --}}

{{-- Potential Risk --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('potential_risk', 'Potential Risk', ['class' => 'control-label']) !!}
        {!! Form::textarea('potential_risk', old('potential_risk', $folder->project->potential_risk), [
            'class' => 'form-control',
            'rows' => 10,
        ]) !!}
        <p class="help-block"></p>
        @if ($errors->has('potential_risk'))
            <p class="help-block">
                {{ $errors->first('potential_risk') }}
            </p>
        @endif
    </div>
</div>
{{-- /Potential Risk --}}

{{-- Sustainability Plan --}}
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('sustainability_plan', 'Sustainability Plan', ['class' => 'control-label']) !!}
        {!! Form::textarea('sustainability_plan', old('sustainability_plan', $folder->project->sustainability_plan), [
            'class' => 'form-control',
            'rows' => 10,
        ]) !!}
        <p class="help-block"></p>
        @if ($errors->has('sustainability_plan'))
            <p class="help-block">
                {{ $errors->first('sustainability_plan') }}
            </p>
        @endif
    </div>
</div>
{{-- /Sustainability Plan --}}