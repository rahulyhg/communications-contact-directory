@extends('_layouts/admin')

@section('content')

<div class="content">
  <h1 class="page-title">{{ $title }}</h1>
  @if ($messages)
  <table class="table table-striped table-bordered data-table dataTable">
    <caption>{{ count($messages) }} Messages</caption>
    <thead>
      <tr>
        <th>Posted</th>
        <th>Name</th>
        <th class="hidden-xs hidden-sm">Email</th>
        <th class="visible-lg">Subject</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($messages as $message)
    <tr>
      <td>{{ $message->created_at }}</td>
      <td>{{ $message->name }}</td>
      <td class="hidden-xs hidden-sm">{{ $message->email }}</td>
      <td class="visible-lg">{{ $message->subject }}</td>
      <td>
      <a href="{{ route('admin.message.show',$message->id) }}" class="btn btn-default btn-xs btn-block">read</a>
    </td>
    </tr>

    @endforeach
    </tbody>
  </table>

  @else
  <h3>No messages</h3>
  @endif
</div><!-- /.content -->

@stop