
<div class="form-group">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['required', 'class'=>'form-control', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  {!! Form::select('status', [0=>'Disabled', 1=>'Enabled'], null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('note', 'Note') !!}
  {!! Form::textarea('note', null, ['class'=>'form-control', 'placeholder'=>'Sample note text.']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.location.store') }}" class="btn btn-default">Cancel</a>
</div>
