@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.directory.create') }}" class="btn btn-default"><i class="fa fa-user-plus"></i>&nbsp;Add Entry</a></span>
  </h1>
  @if ($entries)
  <table class="table">
    <caption>{{ count($entries) }} Directory Entries</caption>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Department</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($entries as $entry)
    <tr>
      <td>{{ $entry->first_name }}</td>
      <td>{{ $entry->last_name }}</td>
      <td>{{ $entry->email }}</td>
      <td>{{ $entry->location }}</td>
      <td>{{ $entry->department }}</td>
      <td><a href="{{ route('admin.directory.edit',$entry->id) }}">edit</a> | {{ ($entry->status == "0" ? "enable" : "disable") }}</td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Users</h3>
  @endif
</div><!-- /.content -->

@stop
