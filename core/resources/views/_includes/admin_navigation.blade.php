
<h3>Administration</h3>
<ul class="nav nav-sidebar">
  <li{!! (isset($page_active) AND $page_active == 'dashboard') ? " class='active'" : "" !!}><a href="/admin">Dashboard Home</a></li>
  <li{!! (isset($page_active) AND $page_active == 'users') ? " class='active'" : "" !!}><a href="/admin/users/">Users</a></li>
</ul>
<h3>Content Management</h3>
<ul class="nav nav-sidebar">
  <li{!! (isset($page_active) AND $page_active == 'directory') ? " class='active'" : "" !!}><a href="/admin/directory/">Directory</a></li>
  <li{!! (isset($page_active) AND $page_active == 'cms') ? " class='active'" : "" !!}><a href="/admin/cms/">CMS Blocks</a></li>
</ul>
