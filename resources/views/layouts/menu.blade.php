<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{!! route('items.index') !!}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>

<li class="{{ Request::is('bags*') ? 'active' : '' }}">
    <a href="{!! route('bags.index') !!}"><i class="fa fa-edit"></i><span>Bags</span></a>
</li>

<li class="{{ Request::is('shifts*') ? 'active' : '' }}">
    <a href="{!! route('shifts.index') !!}"><i class="fa fa-edit"></i><span>Shifts</span></a>
</li>

<li class="{{ Request::is('supervisors*') ? 'active' : '' }}">
    <a href="{!! route('supervisors.index') !!}"><i class="fa fa-edit"></i><span>Supervisors</span></a>
</li>

<li class="{{ Request::is('bagItems*') ? 'active' : '' }}">
    <a href="{!! route('bagItems.index') !!}"><i class="fa fa-edit"></i><span>Bag Items</span></a>
</li>

