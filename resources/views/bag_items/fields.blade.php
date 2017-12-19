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

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Bag Id Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bag_id_id', 'Bag Id Id:') !!}
    {!! Form::number('bag_id_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Item Id Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_id_id', 'Item Id Id:') !!}
    {!! Form::number('item_id_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bagItems.index') !!}" class="btn btn-default">Cancel</a>
</div>
