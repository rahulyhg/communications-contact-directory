@extends('_layouts/app')

@section('content')
<div class="container">

  @if($entries)
  <div id="table-list_wrapper">
    <div class="row">
      <table id="table-list" class="table table-striped table-bordered data-table dataTable" cellspacing="0" role="grid" aria-describedby="table-list_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Name</th>
            <th class="hidden-xs hidden-sm sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="County: activate to sort column ascending" style="width: 173px;">County</th>
            <th class="hidden-xs hidden-sm sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 189px;">Department</th>
            <th class="hidden-xs sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 306px;">Email</th>
            <th class="sorting" tabindex="0" aria-controls="table-list" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 116px;">Phone</th>
          </tr>
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
          <tr>
            <th rowspan="1" colspan="1">Name</th>
            <th class="hidden-xs hidden-sm" rowspan="1" colspan="1">County</th>
            <th class="hidden-xs hidden-sm" rowspan="1" colspan="1">Department</th>
            <th class="hidden-xs" rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Phone</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.row -->
  </div><!-- /#table-list_wrapper -->
  @else
  <h3>No Directory Entries Found</h3>
  @endif

</div><!-- /.container -->

@stop
