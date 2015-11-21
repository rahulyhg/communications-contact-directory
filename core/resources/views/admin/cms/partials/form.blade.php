
<div class="form-group">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['required', 'class'=>'form-control', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
  {!! Form::label('tag', 'Tag') !!}
  {!! Form::text('tag', null, ['required', 'class'=>'form-control', 'placeholder'=>'tag']) !!}
</div>

<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  {!! Form::select('status', ['0'=>'Disabled', '1'=>'Enabled'], null, ['required', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('content', 'Content') !!}
  {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder'=>'Sample note text.']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.cms.store') }}" class="btn btn-default">Cancel</a>
</div>
