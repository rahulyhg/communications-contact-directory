
<p class="admin-navigation-title">Administration</p>
<ul class="nav nav-sidebar">
  <li class="admin-navigation-link{!! (isset($page_active) AND $page_active == 'dashboard') ? " active" : "" !!}">
    <a href="{{ route('admin') }}"><i class="fa fa-home"></i>&nbsp;Dashboard Home</a>
  </li>
  <li class="admin-navigation-link{!! (isset($page_active) AND $page_active == 'users') ? " active" : "" !!}">
    <a href="{{ route('admin') }}/users/"><i class="fa fa-users"></i>&nbsp;Users</a>
  </li>
</ul>
<p class="admin-navigation-title">Content Management</p>
<ul class="nav nav-sidebar">
  <li class="admin-navigation-link{!! (isset($page_active) AND $page_active == 'directory') ? " active" : "" !!}">
    <a href="{{ route('admin') }}/directory/"><i class="fa fa-phone"></i>&nbsp;Directory</a>
  </li>
  <li class="admin-navigation-link{!! (isset($page_active) AND $page_active == 'cms') ? " active" : "" !!}">
    <a href="{{ route('admin') }}/cms/"><i class="fa fa-keyboard-o"></i>&nbsp;CMS Blocks</a>
  </li>
</ul>
