@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.directory.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Entry</a></span>
  </h1>
  @if ($entries)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($entries) }} Directory Entries</caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Department</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($entries as $entry)
    <tr>
      <td>{{ $entry->first_name }} {{ $entry->last_name }}</td>
      <td>{{ $entry->email }}</td>
      <td>{{ $entry->location->title }}</td>
      <td>{{ $entry->department->title }}</td>
      <td>{!! ($entry->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
      <td>
        <a href="{{ route('admin.directory.edit',$entry->id) }}" class="btn btn-default btn-xs btn-block">edit</a>
      </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Directory Entries</h3>
  @endif
</div><!-- /.content -->

@stop
