@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}
    <span class="pull-right"><a href="{{ route('admin.tag.create') }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Tag</a></span>
  </h1>
  @if ($tags)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($tags) }} Tag Entries</caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Entries</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($tags as $tag)
    <tr>
      <td>{{ $tag->name }}</td>
      <td>{{ $tag->count_directories }}</td>
      <td><a href="{{ route('admin.tag.edit',$tag->id) }}" class="btn btn-default btn-xs btn-block">edit</a></td>
    </tr>
    @endforeach
    </tbody>
  </table>

  @else
  <h3>No Organizations</h3>
  @endif
</div><!-- /.content -->

@stop
