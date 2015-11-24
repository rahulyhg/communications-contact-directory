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
        <th>Email</th>
        <th>Subject</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($messages as $message)
    <tr>
      <td>{{ $message->created_at }}</td>
      <td>{{ $message->name }}</td>
      <td>{{ $message->email }}</td>
      <td>{{ $message->subject }}</td>
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