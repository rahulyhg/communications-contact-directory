
<div class="form-group">
  {!! Form::label('title', 'Title', ['class'=>'required']) !!}
  {!! Form::text('title', null, ['required', 'class'=>'form-control', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
  {!! Form::label('status', 'Status', ['class'=>'required']) !!}
  {!! Form::select('status', ['0'=>'Disabled', '1'=>'Enabled'], null, ['required', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('note', 'Note') !!}
  {!! Form::textarea('note', null, ['class'=>'form-control', 'placeholder'=>'Sample note text.']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.department.store') }}" class="btn btn-default">Cancel</a>
</div>
