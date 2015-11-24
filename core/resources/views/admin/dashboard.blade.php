@extends('_layouts/admin')

@section('content')

<div class="content">
<h1 class="page-title">{{ $title }}</h1>
</div><!-- /.content -->

<div class="row dashboard-actions hidden-xs">
  <div class="col-sm-3">
    <a href="{{ route('admin.directory.index') }}" class="dashboard-link">
      <div class="dashboard-link-block">
        <p class="text-center fa-3x"><i class="fa fa-phone"></i></p>
        <h4 class="text-center fa-2x hidden-xs hidden-sm">Directory</h4>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{ route('admin.cms.index') }}" class="dashboard-link">
      <div class="dashboard-link-block">
        <p class="text-center fa-3x"><i class="fa fa-keyboard-o"></i></p>
        <h4 class="text-center fa-2x hidden-xs hidden-sm">CMS</h4>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{ route('admin.users.index') }}" class="dashboard-link">
      <div class="dashboard-link-block">
        <p class="text-center fa-3x"><i class="fa fa-envelope"></i></p>
        <h4 class="text-center fa-2x hidden-xs hidden-sm">Messages</h4>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{ route('admin.users.index') }}" class="dashboard-link">
      <div class="dashboard-link-block">
        <p class="text-center fa-3x"><i class="fa fa-users"></i></p>
        <h4 class="text-center fa-2x hidden-xs hidden-sm">Users</h4>
      </div>
    </a>
  </div>
</div>

<div class="row dashboard-reports">
  <div class="col-sm-6">
    <h2 class="report-title"><i class="fa fa-bar-chart-o"></i>&nbsp;Report</h2>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
    </ul>
  </div>
  <div class="col-sm-6">
    <h2 class="report-title"><i class="fa fa-bar-chart-o"></i>&nbsp;Report</h2>
    <p>Report goes here.</p>
  </div>
</div>
@stop