@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right">
      <a href="{{ route('admin.directory.excel') }}" class="btn btn-link" target="_blank"><i class="fa fa-file-excel-o  fa-pad-right"></i>Download to Excel</a>
      <a href="{{ route('admin.directory.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Entry</a>
    </span>
  </h1>
  @if ($entries)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($entries) }} Directory Entries</caption>
    <thead>
      <tr>
        <th>Last, First</th>
        <th class="visible-lg">Email</th>
        <th class="hidden-xs hidden-sm">Organization</th>
        <th class="hidden-xs hidden-sm">Department</th>
        <th class="hidden-xs hidden-sm">Updated</th>
        <th class="visible-lg">Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($entries as $entry)
    <tr>
      <td>{{ $entry->last_name }},&nbsp;{{ $entry->first_name }}</td>
      <td class="visible-lg">{{ $entry->email }}</td>
      <td class="hidden-xs hidden-sm">{{ $entry->location->title }}</td>
      <td class="hidden-xs hidden-sm">{{ $entry->department->title }}</td>
      <td class="hidden-xs hidden-sm">{{ $entry->updated_at->format('Y-m-d') }}</td>
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
