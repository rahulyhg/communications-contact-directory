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






































































































      <tr role="row" class="odd">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-1">Arlene Holladay</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">CAO</td>
          <td class="hidden-xs"><a href="mailto:arlene_holladay@washco.com">arlene_holladay@washco.com</a></td>
          <td><a href="tel:+503-555-1212">503-555-1212</a></td>
        </tr><tr role="row" class="even">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-10">Bryce Moriarity</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">Public Works</td>
          <td class="hidden-xs"><a href="mailto:bryce_moriarity@washco.com">bryce_moriarity@washco.com</a></td>
          <td><a href="tel:+503-777-1212">503-777-1212</a></td>
        </tr><tr role="row" class="odd">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-8">Clifton Peagler</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">CAO</td>
          <td class="hidden-xs"><a href="mailto:clifton_peagler@washco.com">clifton_peagler@washco.com</a></td>
          <td><a href="tel:+503-777-1212">503-777-1212</a></td>
        </tr><tr role="row" class="even">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-4">Ethelyn Alegria</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">Animal Services</td>
          <td class="hidden-xs"><a href="mailto:ethelyn_alegria@washco.com">ethelyn_alegria@washco.com</a></td>
          <td><a href="tel:+503-666-1212">503-666-1212</a></td>
        </tr><tr role="row" class="odd">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-19">Ginny Slovak</a></td>
          <td class="hidden-xs hidden-sm">Clackamas County</td>
          <td class="hidden-xs hidden-sm">Facilities</td>
          <td class="hidden-xs"><a href="mailto:ginny_slovak@clackco.com">ginny_slovak@clackco.com</a></td>
          <td><a href="tel:+503-999-1212">503-999-1212</a></td>
        </tr><tr role="row" class="even">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-9">Hyun Determan</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">Public Works</td>
          <td class="hidden-xs"><a href="mailto:hyun_determan@washco.com">hyun_determan@washco.com</a></td>
          <td><a href="tel:+503-777-1212">503-777-1212</a></td>
        </tr><tr role="row" class="odd">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-20">Karry Golay</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">Facilities</td>
          <td class="hidden-xs"><a href="mailto:karry_golay@washco.com">karry_golay@washco.com</a></td>
          <td><a href="tel:+503-123-4567">503-123-4567</a></td>
        </tr><tr role="row" class="even">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-5">Kera Bonacci</a></td>
          <td class="hidden-xs hidden-sm">Washington County</td>
          <td class="hidden-xs hidden-sm">Animal Services</td>
          <td class="hidden-xs"><a href="mailto:kera_bonacci@washco.com">kera_bonacci@washco.com</a></td>
          <td><a href="tel:+503-666-1212">503-666-1212</a></td>
        </tr><tr role="row" class="odd">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-12">Kim Mei</a></td>
          <td class="hidden-xs hidden-sm">Multnomah County</td>
          <td class="hidden-xs hidden-sm">Public Works</td>
          <td class="hidden-xs"><a href="mailto:kim_mei@multco.com">kim_mei@multco.com</a></td>
          <td><a href="tel:+503-888-1212">503-888-1212</a></td>
        </tr><tr role="row" class="even">
          <td class="sorting_1"><a href="#" data-toggle="modal" data-target="#contact-16">Lauralee Rocha</a></td>
          <td class="hidden-xs hidden-sm">Clackamas County</td>
          <td class="hidden-xs hidden-sm">Parks and Recreation</td>
          <td class="hidden-xs"><a href="mailto:lauralee_rocha@domain.com">lauralee_rocha@domain.com</a></td>
          <td><a href="tel:+503-999-1212">503-999-1212</a></td>
        </tr></tbody>
      <tfoot>
        <tr><th rowspan="1" colspan="1">Name</th><th class="hidden-xs hidden-sm" rowspan="1" colspan="1">County</th><th class="hidden-xs hidden-sm" rowspan="1" colspan="1">Department</th><th class="hidden-xs" rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Phone</th></tr>
      </tfoot>
    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="table-list_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table-list_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="table-list" tabindex="0" id="table-list_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="table-list" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="table-list" tabindex="0"><a href="#">2</a></li><li class="paginate_button next" aria-controls="table-list" tabindex="0" id="table-list_next"><a href="#">Next</a></li></ul></div></div></div></div>
</div><!-- /.container -->

@stop
