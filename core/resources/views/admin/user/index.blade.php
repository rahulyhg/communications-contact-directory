@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.users.create') }}" class="btn btn-default"><i class="fa fa-user-plus"></i>&nbsp;Add User</a></span>
  </h1>
  @if ($users)
  <table class="table">
    <caption>Optional table caption.</caption>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($users as $user)
    <tr>
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ ($user->status == "1" ? "Enabled" : "Disabled") }}</td>
      <td><a href="{{ route('admin.users.edit',$user->id) }}">Edit</a> | {{ ($user->status == "0" ? "Link to Enable" : "Link to Disable") }}</td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Users</h3>
  @endif
</div><!-- /.content -->

@stop
