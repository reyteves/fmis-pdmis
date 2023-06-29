<label for="signatures">Signatures</label>

{{-- Signatures Checklist --}}
<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('prepared_by_checkbox', 'Prepared by: CSC Staff', old('prepared_by_checkbox', $folder->signature->prepared_by_checkbox) == 'checked', ['id' => 'prepared_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('prepared_by_input', 'Prepared by: CSC Staff', ['class' => 'form-check-label']) !!}
            {!! Form::text('prepared_by_input', old('prepared_by_input', $folder->signature->prepared_by_input), ['class' => 'form-control', 'placeholder' => 'Name of CSC Staff']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('evaluated_by_checkbox', 'Evaluated by: Provincial Officer', old('evaluated_by_checkbox', $folder->signature->evaluated_by_checkbox) == 'checked', ['id' => 'evaluated_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('evaluated_by_input', 'Evaluated by: Provincial Officer', ['class' => 'form-check-label']) !!}
            {!! Form::text('evaluated_by_input', old('evaluated_by_input', $folder->signature->evaluated_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Provincial Officer']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('confirmed_by_checkbox', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', old('confirmed_by_checkbox', $folder->signature->confirmed_by_checkbox) == 'checked', ['id' => 'confirmed_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('confirmed_by_input', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', ['class' => 'form-check-label']) !!}
            {!! Form::text('confirmed_by_input', old('confirmed_by_input', $folder->signature->confirmed_by_input), ['class' => 'form-control', 'placeholder' => 'Name of IPS/IPO Heads/IP Leader/Elder']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('validated_by_checkbox', 'Validated by: Regional Staff', old('validated_by_checkbox', $folder->signature->validated_by_checkbox) == 'checked', ['id' => 'validated_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('validated_by_input', 'Validated by: Regional Staff', ['class' => 'form-check-label']) !!}
            {!! Form::text('validated_by_input', old('validated_by_input', $folder->signature->validated_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Regional Staff']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('endorsed_by_checkbox', 'Endorsed by: Regional Director', old('endorsed_by_checkbox', $folder->signature->endorsed_by_checkbox) == 'checked', ['id' => 'endorsed_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('endorsed_by_input', 'Endorsed by: Regional Director', ['class' => 'form-check-label']) !!}
            {!! Form::text('endorsed_by_input', old('endorsed_by_input', $folder->signature->endorsed_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Regional Director']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('recommended_by_checkbox', 'Recommending Approval: Executive Director', old('recommended_by_checkbox', $folder->signature->recommended_by_checkbox) == 'checked', ['id' => 'recommended_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('recommended_by_input', 'Recommending Approval: Executive Director', ['class' => 'form-check-label']) !!}
            {!! Form::text('recommended_by_input', old('recommended_by_input', $folder->signature->recommended_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Executive Director']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="form-check">
            {!! Form::checkbox('approved_by_checkbox', 'Approved by: Chairperson', old('approved_by_checkbox', $folder->signature->approved_by_checkbox) == 'checked', ['id' => 'approved_by_checkbox', 'class' => 'form-check-input']) !!}
            {!! Form::label('approved_by_input', 'Approved by: Chairperson', ['class' => 'form-check-label']) !!}
            {!! Form::text('approved_by_input', old('approved_by_input', $folder->signature->approved_by_input), ['class' => 'form-control', 'placeholder' => 'Name of Chairperson']) !!}
        </div>
    </div>
</div>

{{-- /Signatures Checklist --}}