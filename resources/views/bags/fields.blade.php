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

<!-- Bar Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bar_code', 'Bar Code:') !!}
    {!! Form::text('bar_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    {!! Form::text('customer_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Cleanly Portal Wf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cleanly_portal_wf', 'Cleanly Portal Wf:') !!}
    {!! Form::number('cleanly_portal_wf', null, ['class' => 'form-control']) !!}
</div>

<!-- Cleanly Portal Hd Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cleanly_portal_hd_count', 'Cleanly Portal Hd Count:') !!}
    {!! Form::number('cleanly_portal_hd_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('picture_url', 'Picture Url:') !!}
    {!! Form::textarea('picture_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bags.index') !!}" class="btn btn-default">Cancel</a>
</div>
