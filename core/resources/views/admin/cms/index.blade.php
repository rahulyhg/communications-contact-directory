@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.cms.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add cms</a></span>
  </h1>
  @if ($entries AND count($entries) > 0)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($entries) }} cms Entries</caption>
    <thead>
      <tr>
        <th>Title</th>
        <th class="visible-lg">Tag</th>
        <th class="visible-lg">Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($entries as $entry)
    <tr>
      <td>{{ $entry->title }}</td>
      <td class="visible-lg">{{ $entry->tag }}</td>
      <td class="visible-lg">{!! ($entry->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
      <td>
        <a href="{{ route('admin.cms.edit',$entry->id) }}" class="btn btn-default btn-xs btn-block">edit</a>
      </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No CMS Entries</h3>
  @endif
</div><!-- /.content -->

@stop