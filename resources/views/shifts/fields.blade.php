<!-- Created Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_date', 'Created Date:') !!}
    {!! Form::date('created_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Modified Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modified_date', 'Modified Date:') !!}
    {!! Form::date('modified_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor', 'Vendor:') !!}
    {!! Form::text('vendor', null, ['class' => 'form-control']) !!}
</div>

<!-- Detail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Cleanly Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cleanly_shift', 'Cleanly Shift:') !!}
    {!! Form::text('cleanly_shift', null, ['class' => 'form-control']) !!}
</div>

<!-- Cleanly Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cleanly_date', 'Cleanly Date:') !!}
    {!! Form::date('cleanly_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Washpro Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('washpro_shift', 'Washpro Shift:') !!}
    {!! Form::text('washpro_shift', null, ['class' => 'form-control']) !!}
</div>

<!-- Washpro Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('washpro_date', 'Washpro Date:') !!}
    {!! Form::date('washpro_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Incharge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_incharge', 'Shift Incharge:') !!}
    {!! Form::text('shift_incharge', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Incharge Assistant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_incharge_assistant', 'Shift Incharge Assistant:') !!}
    {!! Form::text('shift_incharge_assistant', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::number('supervisor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('shifts.index') !!}" class="btn btn-default">Cancel</a>
</div>
