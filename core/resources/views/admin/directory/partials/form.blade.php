
<div class="form-group">
  {!! Form::label('first_name', 'First Name', ['class'=>'required']) !!}
  {!! Form::text('first_name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Firstname']) !!}
</div>

<div class="form-group">
  {!! Form::label('last_name', 'Last Name', ['class'=>'required']) !!}
  {!! Form::text('last_name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Lastname']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email') !!}
  {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'email@domain.com']) !!}
</div>

<div class="form-group">
  {!! Form::label('status', 'Status', ['class'=>'required']) !!}
  {!! Form::select('status', ['0'=>'Disabled', '1'=>'Enabled'], null, ['required', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('location_id', 'Location') !!}
  {!! Form::select('location_id', $active_locations, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('department_id', 'Department') !!}
  {!! Form::select('department_id', $active_departments, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('primary_phone', 'Primary Phone Number') !!}
  {!! Form::text('primary_phone', null, ['class'=>'form-control', 'placeholder'=>'123-456-7890']) !!}
</div>

<div class="form-group">
  {!! Form::label('secondary_phone', 'Secondary Phone Number') !!}
  {!! Form::text('secondary_phone', null, ['class'=>'form-control', 'placeholder'=>'123-456-7890']) !!}
</div>

<div class="form-group">
  {!! Form::label('website', 'Website URL') !!}
  {!! Form::text('website', null, ['class'=>'form-control', 'placeholder'=>'http://www.website.com']) !!}
</div>

<div class="form-group">
  {!! Form::label('twitter', 'Twitter Handle') !!}
  {!! Form::text('twitter', null, ['class'=>'form-control', 'placeholder'=>'@handle']) !!}
</div>

<div class="form-group">
  {!! Form::label('facebook', 'Facebook Handle') !!}
  {!! Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'@handle']) !!}
</div>

<div class="form-group">
  {!! Form::label('googleplus', 'Google+ Handle') !!}
  {!! Form::text('googleplus', null, ['class'=>'form-control', 'placeholder'=>'+handle']) !!}
</div>

<div class="form-group">
  {!! Form::label('linkedin', 'LinkedIn URL') !!}
  {!! Form::text('linkedin', null, ['class'=>'form-control', 'placeholder'=>'http://www.linkedin.com/user']) !!}
</div>

<div class="form-group">
  {!! Form::label('note', 'Note') !!}
  {!! Form::textarea('note', null, ['class'=>'form-control', 'placeholder'=>'Sample note text.']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.directory.index') }}" class="btn btn-default">Cancel</a>
</div>
