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

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('supervisors.index') !!}" class="btn btn-default">Cancel</a>
</div>
