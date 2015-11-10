@extends('_layouts/app')

@section('content')
<div class="container">

<div id="table-list_wrapper">
<div class="row">
<div class="col-sm-6">
<div class="dataTables_length" id="table-list_length"><label>Show <select name="table-list_length" aria-controls="table-list" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="table-list_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table-list"></label></div></div></div><div class="row"><div class="col-sm-12">
<table id="table-list" class="table table-striped table-bordered data-table dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table-list_info" style="width: 100%;">
      <thead>
        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Name</th><th class="hidden-xs hidden-sm sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="County: activate to sort column ascending" style="width: 173px;">County</th><th class="hidden-xs hidden-sm sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 189px;">Department</th><th class="hidden-xs sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 306px;">Email</th><th class="sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 116px;">Phone</th></tr>
      </thead>
      <tbody>

        @foreach ($entries as $entry)
        <tr>
          <td>{{ $entry->first_name }}&nbsp;{{ $entry->last_name }}</td>
          <td>{{ $entry->location }}</td>
          <td>{{ $entry->department }}</td>
          <td>{{ $entry->email }}</td>
          <td>{{ $entry->primary_phone }}</td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr><th rowspan="1" colspan="1">Name</th><th class="hidden-xs hidden-sm" rowspan="1" colspan="1">County</th><th class="hidden-xs hidden-sm" rowspan="1" colspan="1">Department</th><th class="hidden-xs" rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Phone</th></tr>
      </tfoot>
    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="table-list_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table-list_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="table-list" tabindex="0" id="table-list_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="table-list" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="table-list" tabindex="0"><a href="#">2</a></li><li class="paginate_button next" aria-controls="table-list" tabindex="0" id="table-list_next"><a href="#">Next</a></li></ul></div></div></div></div>
</div><!-- /.container -->

@stop
