
@if(Session::has('flash_success'))
<div class="alert alert-success alert-fade-away">
<div class="container">
  <p>{{ session('flash_success') }}</p>
</div>
</div>
@endif

@if(Session::has('flash_danger'))
<div class="alert alert-danger">
<div class="container">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>{{ session('flash_danger') }}</p>
</div>
</div>
@endif

@if(Session::has('flash_info'))
<div class="alert alert-info">
<div class="container">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>{{ session('flash_info') }}</p>
</div>
</div>
@endif
