@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.location.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Location</a></span>
  </h1>
  @if ($locations)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($locations) }} location Entries</caption>
    <thead>
      <tr>
        <th>Title</th>
        <th class="visible-lg">Note</th>
        <th class="hidden-xs hidden-sm">Status</th>
        <th class="hidden-xs hidden-sm">Entries</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($locations as $location)
    <tr>
      <td>{{ $location->title }}</td>
      <td class="visible-lg">{{ $location->note }}</td>
      <td class="hidden-xs hidden-sm">{!! ($location->status == 0) ? '<span class="text-warning">Disabled</span>' : 'Enabled' !!}</td>
      <td class="hidden-xs hidden-sm">{{ $location->count_entries }}</td>
      <td>
      <a href="{{ route('admin.location.edit',$location->id) }}" class="btn btn-default btn-xs btn-block">edit</a>
    </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No locations</h3>
  @endif
</div><!-- /.content -->

@stop