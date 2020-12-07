<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ url('admin/users') }}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('propertyTypes*') ? 'active' : '' }}">
    <a href="{{ url('admin/propertyTypes') }}"><i class="fa fa-home"></i><span>Property Types</span></a>
</li>

<li class="{{ Request::is('propertySubTypes*') ? 'active' : '' }}">
    <a href="{{ url('admin/propertySubTypes') }}"><i class="fa fa-home"></i><span>Property Sub Types</span></a>
</li>

<li class="{{ Request::is('bathrooms*') ? 'active' : '' }}">
    <a href="{{ url('admin/bathrooms') }}"><i class="fa fa-shower"></i><span>Bathrooms</span></a>
</li>

<li class="{{ Request::is('bedrooms*') ? 'active' : '' }}">
    <a href="{{ url('admin/bedrooms') }}"><i class="fa fa-home"></i><span>Bedrooms</span></a>
</li>

<li class="{{ Request::is('balconies*') ? 'active' : '' }}">
    <a href="{{ url('admin/balconies') }}"><i class="fa fa-home"></i><span>Balconies</span></a>
</li>

<li class="{{ Request::is('floors*') ? 'active' : '' }}">
    <a href="{{ url('admin/floors') }}"><i class="fa fa-building"></i><span>Floors</span></a>
</li>



<li class="{{ Request::is('properties*') ? 'active' : '' }}">
    <a href="{{ url('admin/properties') }}"><i class="fa fa-building-o"></i><span>Properties</span></a>
</li>

<li class="{{ Request::is('sendQueries*') ? 'active' : '' }}">
    <a href="{{ route('sendQueries.index') }}"><i class="fa fa-edit"></i><span>Send Queries</span></a>
</li>


