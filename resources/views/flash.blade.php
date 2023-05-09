@if (Session::has('status'))
<div class="alert alert-info alert-dismissible fade show w-100" role="alert">
  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
  {{ Session::get('status') }}
</div>
@endif
