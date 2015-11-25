
@if ($entry)
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   <h4 class="modal-title">{{ $entry->first_name }} {{ $entry->last_name }}</h4>
</div><!-- /.modal-header -->

<div class="modal-body">
  @if ( strlen($entry->location_id) > 0 )
  <p class="location"><i class="fa fa-map-marker"></i>&nbsp;{{ $entry->location->title }}</p>
  @endif

  @if ( strlen($entry->department_id) > 0 )
  <p class="department"><i class="fa fa-building-o"></i>&nbsp;{{ $entry->department->title }}</p>
  @endif

  @if ( strlen($entry->email) > 0 )
  <p class="email"><i class="fa fa-envelope"></i>&nbsp;
    <a href="mailto:{{ $entry->email }}">{{ $entry->email }}</a></p>
  @endif

  @if ( strlen($entry->primary_phone) > 0 )
  <p class="phone">
    <i class="fa fa-phone"></i>&nbsp;
    <a href="tel:+{{ str_replace("-","",$entry->primary_phone) }}">{{ $entry->primary_phone }}</a>
  </p>
  @endif

  @if ( strlen($entry->secondary_phone) > 0 )
  <p class="phone">
    <i class="fa fa-phone"></i>&nbsp;
    <a href="tel:+{{ str_replace("-","",$entry->secondary_phone) }}">{{ $entry->secondary_phone }}</a>
  </p>
  @endif

  @if ( strlen($entry->website) > 0)
  <p class="website">
    <i class="fa fa-globe"></i>&nbsp;<a href="{{ $entry->website }}" target="_blank">{{ $entry->website }}</a>
  </p>
  @endif

  @if ( strlen($entry->twitter) > 0)
  <p class="twitter">
    <i class="fa fa-twitter-square"></i>&nbsp;<a href="https://twitter.com/{{ str_replace("@","",$entry->twitter) }}" target="_blank">{{ $entry->twitter }}</a>
  </p>
  @endif

  @if ( strlen($entry->facebook) > 0)
  <p class="facebook">
    <i class="fa fa-facebook-official"></i>&nbsp;<a href="https://www.facebook.com/public/{{ str_replace("@","",$entry->facebook) }}" target="_blank">{{ $entry->facebook }}</a>
  </p>
  @endif

  @if ( strlen($entry->googleplus) > 0)
  <p class="googleplus">
    <i class="fa fa-google-plus-square"></i>&nbsp;<a href="https://plus.google.com/{{ $entry->googleplus }}" target="_blank">{{ $entry->googleplus }}</a>
  </p>
  @endif

  @if ( strlen($entry->linkedin) > 0)
  <p class="linkedin">
    <i class="fa fa-linkedin-square"></i>&nbsp;<a href="{{ $entry->linkedin }}" target="_blank">{{ $entry->linkedin }}</a>
  </p>
  @endif

  @if ( strlen($entry->note) > 0 )
  <p class="note">{{ $entry->note }}</p>
  @endif
</div><!-- /.modal-body -->

<div class="modal-footer">
  @if ( strlen($entry->email) > 0 )
  <a href="mailto:{{ $entry->email }}" class="btn btn-default"><i class="fa fa-envelope"></i></a>
  @endif
  @if ( strlen($entry->primary_phone) > 0 )
  <a href="tel:+{{ str_replace("-","",$entry->primary_phone) }}" class="btn btn-default"><i class="fa fa-phone"></i></a>
  @endif
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div><!-- /.modal-footer -->

@else

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   <h4 class="modal-title">Entry not Found</h4>
</div><!-- /.modal-header -->

<div class="modal-body">
  <div class="te">Entry not found.</div>
</div><!-- /.modal-body -->
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div><!-- /.modal-footer -->
@endif
