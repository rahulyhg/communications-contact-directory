
<div class="form-group">
  {!! Form::label('title', 'Title', ['class'=>'required']) !!}
  {!! Form::text('title', null, ['required', 'class'=>'form-control required', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
  {!! Form::label('street_address_1', 'Street Line 1', ['class'=>'required']) !!}
  {!! Form::text('street_address_1', null, ['required', 'class'=>'form-control required', 'placeholder'=>'123 Street Rd.']) !!}
</div>

<div class="form-group">
  {!! Form::label('street_address_2', 'Street Line 2') !!}
  {!! Form::text('street_address_2', null, ['class'=>'form-control', 'placeholder'=>'Appt. #7']) !!}
</div>

<div class="form-group">
  {!! Form::label('city', 'City', ['class'=>'required']) !!}
  {!! Form::text('city', null, ['required', 'class'=>'form-control required', 'placeholder'=>'Hillsboro']) !!}
</div>

<div class="form-group">
  {!! Form::label('state_id', 'State', ['class'=>'required']) !!}
  {!! Form::select('state_id', $states, null, ['required', 'class'=>'form-control required']) !!}
</div>

<div class="form-group">
  {!! Form::label('zipcode', 'Zipcode', ['class'=>'required']) !!}
  {!! Form::text('zipcode', null, ['required', 'class'=>'form-control required', 'placeholder'=>'12345']) !!}
</div>

<div class="form-group">
  {!! Form::label('url', 'Website URL') !!}
  {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'http://www.website.com/']) !!}
</div>

<div class="form-group">
  {!! Form::label('status', 'Status', ['class'=>'required']) !!}
  {!! Form::select('status', [0=>'Disabled', 1=>'Enabled'], null, ['required', 'class'=>'form-control required']) !!}
</div>

<div class="form-group">
  {!! Form::label('note', 'Note') !!}
  {!! Form::textarea('note', null, ['class'=>'form-control', 'placeholder'=>'Sample note text.']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  <a href="{{ route('admin.location.store') }}" class="btn btn-default">Cancel</a>
</div>
