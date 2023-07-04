@foreach($folder->stakeholder as $stakeholder)
    @if($stakeholder->folder->contains($folder))
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name', $stakeholder->name), ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('office_address', 'Office Address', ['class' => 'control-label']) !!}
                {!! Form::text('office_address', old('office_address', $stakeholder->office_address), ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('contact_number', 'Contact Number', ['class' => 'control-label']) !!}
                {!! Form::text('contact_number', old('contact_number', $stakeholder->contact_number), ['class' => 'form-control']) !!}
            </div>
        </div>
    @endif
@endforeach