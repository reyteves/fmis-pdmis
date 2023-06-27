{{-- Signatures Checklist --}}
    <div class="form-row">
        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('prepared_by_checkbox', 'Prepared by: CSC Staff', false, ['id' => 'prepared_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('prepared_by_input', 'Prepared by: CSC Staff', ['class' => 'form-check-label']) !!}
                {!! Form::text('prepared_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of CSC Staff']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('evaluated_by_checkbox', 'Evaluated by: Provincial Officer', false, ['id' => 'evaluated_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('evaluated_by_input', 'Evaluated by: Provincial Officer', ['class' => 'form-check-label']) !!}
                {!! Form::text('evaluated_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of Provincial Officer']) !!}
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('confirmed_by_checkbox', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', false, ['id' => 'confirmed_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('confirmed_by_input', 'Confirmed by: IPS/IPO Heads/IP Leader/Elder', ['class' => 'form-check-label']) !!}
                {!! Form::text('confirmed_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of IPS/IPO Heads/IP Leader/Elder']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('validated_by_checkbox', 'Validated by: Regional Staff', false, ['id' => 'validated_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('validated_by_input', 'Validated by: Regional Staff', ['class' => 'form-check-label']) !!}
                {!! Form::text('validated_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of Regional Staff']) !!}
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('endorsed_by_checkbox', 'Endorsed by: Regional Director', false, ['id' => 'endorsed_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('endorsed_by_input', 'Endorsed by: Regional Director', ['class' => 'form-check-label']) !!}
                {!! Form::text('endorsed_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of Regional Director']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('recommended_by_checkbox', 'Recommending Approval: Executive Director', false, ['id' => 'recommended_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('recommended_by_input', 'Recommending Approval: Executive Director', ['class' => 'form-check-label']) !!}
                {!! Form::text('recommended_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of Executive Director']) !!}
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <div class="form-check">
                {!! Form::checkbox('approved_by_checkbox', 'Approved by: Chairperson', false, ['id' => 'approved_by_checkbox', 'class' => 'form-check-input']) !!}
                {!! Form::label('approved_by_input', 'Approved by: Chairperson', ['class' => 'form-check-label']) !!}
                {!! Form::text('approved_by_input', null, ['class' => 'form-control', 'placeholder' => 'Name of Chairperson']) !!}
            </div>
        </div>
    </div>

{{-- /Signatures Checklist --}}


