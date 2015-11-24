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
        <th class="visible-lg">Email</th>
        <th class="hidden-xs hidden-sm">Location</th>
        <th class="hidden-xs hidden-sm">Department</th>
        <th class="visible-lg">Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($entries as $entry)
    <tr>
      <td>{{ $entry->first_name }} {{ $entry->last_name }}</td>
      <td class="visible-lg">{{ $entry->email }}</td>
      <td class="hidden-xs hidden-sm">{{ $entry->location->title }}</td>
      <td class="hidden-xs hidden-sm">{{ $entry->department->title }}</td>
      <td class="visible-lg">{!! ($entry->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
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
