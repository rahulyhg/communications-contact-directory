@extends('_layouts/admin')

@section('content')

<div class="content">
<h1 class="page-title"><i class="fa fa-tachometer"></i>&nbsp;{{ $title }}</h1>
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
    <a href="{{ route('admin.message.index') }}" class="dashboard-link">
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
    <h2 class="report-title"><i class="fa fa-hashtag"></i>&nbsp;Counts</h2>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">{{ $count_directory }}</span>
        <a href="{{ route('admin.directory.index') }}">Active Directory Entries</a>
      </li>
      <li class="list-group-item">
        <span class="badge">{{ $count_users }}</span>
        <a href="{{ route('admin.users.index') }}">Active Users</a>
      </li>
      <li class="list-group-item">
        <span class="badge">{{ $count_messages }}</span>
        <a href="{{ route('admin.message.index') }}">Messages</a>
      </li>
    </ul>
  </div>
  <div class="col-sm-6">
    <h2 class="report-title"><i class="fa fa-pencil"></i>&nbsp;Recent Messages</h2>
    @if ($messages)
      @foreach ($messages as $message)
      <p>{{ substr($message->created_at,0,10) }} - <a href="{{ route('admin.message.show',$message->id) }}">{{ $message->subject }}</a></p>
      @endforeach
    @else
    <h5>No recent messages</h5>
    @endif
  </div>
</div>
@stop
