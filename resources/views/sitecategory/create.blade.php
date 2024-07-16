@extends('layouts.main')

@section('content')
<div class="card mb-3">

<div class="card-body">

  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Create Site Category</h5>
    <p class="text-center small">Enter Site  details to create It</p>
  </div>

  <form class="row g-3 needs-validation"  method="POST" enctype="multipart/form-data" action="{{ route('store.sitecategory') }}" novalidate>  
        @csrf
        <div class="col-12">
      <label for="yourEmail" class="form-label">Category Name</label>
        <input type="text" name="category_name" class="form-control" id="yourUsername" value = "{{old('category_name')}}" required>

      <div class="invalid-feedback">@error('category_name') {{message}}@enderror </div>
    </div>
   
    <div class="col-12">
      
      <label for="SiteIcon" class="col-sm-2 col-form-label">Category Icon</label>
      <div class="col-sm-12 has-validation">
        <input class="form-control" type="file" id="SiteIcon" name="icon">
      </div>
      <div class="invalid-feedback">@error('icon') {{message}}@enderror </div>
    </div>
    <div class="col-12">
      <label for="yourUsername" class="form-label">Site Description</label>
      <div class="input-group has-validation">
        <!-- <span class="input-group-text" id="inputGroupPrepend">%</span> -->
        <textarea id="projectinput9" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Reject Reason"
                           name="description"  required>{{old('description')}}</textarea>
                          @error('description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
        <div class="invalid-feedback">Please enter icon.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Create Site Category</button>
    </div>
  </form>
</div>
</div>
@endsection