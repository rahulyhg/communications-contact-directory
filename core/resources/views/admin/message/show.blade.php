@extends('_layouts/admin')

@section('content')
<div class="content">
<h1 class="page-title">{{ $title }}</h1>
<div class="well">

  @if ($message)
  <p class="message-label"><i class="fa fa-calendar"></i>&nbsp;Posted</p>
  <p class="message-copy">{{ $message->created_at }}</p>

  <p class="message-label"><i class="fa fa-user"></i>&nbsp;Name</p>
  <p class="message-copy">{{ $message->name }}</p>

  <p class="message-label"><i class="fa fa-envelope"></i>&nbsp;Email</p>
  <p class="message-copy"><a href="mailto:{{ $message->email }}?subject=RE: {{ $message->subject }}">{{ $message->email }}</a></p>

  <p class="message-label"><i class="fa fa-tag"></i>&nbsp;Subject</p>
  <p class="message-copy">{{ $message->subject }}</p>

  <p class="message-label"><i class="fa fa-comment"></i>&nbsp;Message</p>
  <p class="message-copy">{{ $message->message }}</p>

  <p><a href="{{ route('admin.message.index') }}" class="btn btn-default"><i class="fa fa-long-arrow-left"></i>&nbsp;Back to Messages</a></p>

  @else
  <h1 class="page-title">Message not found</h1>
  @endif

</div><!-- /.well -->
</div><!-- /.content -->
@stop
