@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.department.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Department</a></span>
  </h1>
  @if ($departments)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($departments) }} Department Entries</caption>
    <thead>
      <tr>
        <th>Title</th>
        <th>Note</th>
        <th>Status</th>
        <th>Entries</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($departments as $department)
    <tr>
      <td>{{ $department->title }}</td>
      <td>{{ $department->note }}</td>
      <td>{!! ($department->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
      <td>{{ $department->count_entries }}</td>
      <td>
        <a href="{{ route('admin.department.edit',$department->id) }}" class="btn btn-default btn-xs btn-block">edit</a>
      </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Departments</h3>
  @endif
</div><!-- /.content -->

@stop