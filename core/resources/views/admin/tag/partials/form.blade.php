
<div class="form-group">
  {!! Form::label('name', 'Name', ['class'=>'required']) !!}
  {!! Form::text('name', null, ['required', 'class'=>'form-control required', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.tag.store') }}" class="btn btn-default">Cancel</a>
</div>
