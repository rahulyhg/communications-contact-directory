

<div class="modal fade" id="entryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

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
          <a href="tel:+{{ $entry->primary_phone }}">{{ $entry->primary_phone }}</a>
        </p>
        @endif

        @if ( strlen($entry->secondary) > 0 )
        <p class="phone">
          <i class="fa fa-phone"></i>&nbsp;
          <a href="tel:+{{ $entry->secondary }}">{{ $entry->secondary }}</a>
        </p>
        @endif

        @if ( strlen($entry->twitter) > 0)
        <p class="twitter">
          <a href="https://twitter.com/{{ $entry->twitter }}"><i class="fa fa-twitter"></i>&nbsp;{{ $entry->twitter }}</a>
        </p>
        @endif
      </div><!-- /.modal-body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default"><i class="fa fa-envelope"></i></button>
        <button type="button" class="btn btn-default"><i class="fa fa-phone"></i></button>
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

    </div> <!-- /.modal-content -->
  </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->