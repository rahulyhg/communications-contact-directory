@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.users.create') }}" class="btn btn-default"><i class="fa fa-user-plus"></i>&nbsp;Add User</a></span>
  </h1>
  @if ($users)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>Optional table caption.</caption>
    <thead>
      <tr>
        <th>First</th>
        <th>Last</th>
        <th>Username</th>
        <th class="visible-lg">Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($users as $user)
    <tr>
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->email }}</td>
      <td class="visible-lg">{!! ($user->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
      <td>
        <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-default btn-xs btn-block">edit</a>
      </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Users</h3>
  @endif
</div><!-- /.content -->

@stop
