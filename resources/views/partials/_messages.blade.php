<!-- scrript -->
@if(Session::has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="bi bi-check-circle me-1"></i>
{{Session::get('message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(Session::has('success'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
  {{Session::get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <i class="bi bi-exclamation-octagon me-1"></i>
  {{Session::get('error')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<!--  -->
    @if(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <i class="bi bi-info-circle me-1"></i>
      {{Session::get('info')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(Session::has('guest'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <i class="bi bi-folder me-1"></i>
      {{Session::get('guest')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!-- scrript -->