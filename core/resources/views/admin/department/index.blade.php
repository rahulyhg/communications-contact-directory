@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.department.create') }}" class="btn btn-default"><i class="fa fa-user-plus"></i>&nbsp;Add Entry</a></span>
  </h1>
  @if ($departments)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($departments) }} Department Entries</caption>
    <thead>
      <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Count</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($departments as $department)
    <tr>
      <td>{{ $department->title }}</td>
      <td>{{ $department->status }}</td>
      <td>COUNTER</td>
      <td><a href="{{ route('admin.department.edit',$department->id) }}">edit</a> | {{ ($department->status == "0" ? "enable" : "disable") }}</td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Users</h3>
  @endif
</div><!-- /.content -->

@stop