@extends('layouts.main')

@section('content')
<div class="card mb-3">

<div class="card-body">

  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Update an Site</h5>
    <p class="text-center small">Enter Site  details to create It</p>
  </div>

  <form class="row g-3 needs-validation"  method="POST" action="{{ route('update.site') }}" novalidate>  
        @csrf
        <input type="hidden" name="site_id" value="{{$site->id}}">
    <div class="col-12">
      <label for="yourName" class="form-label">Site Name</label>
      <input type="text" name="name" class="form-control" id="yourName" value = "{{$site->name}}" required>
      <div class="invalid-feedback">Please, Site name!</div>
    </div>

    <div class="col-12">
      <label for="yourEmail" class="form-label">Site Category</label>
        <select class="form-select" aria-label="Site Category" name ="category" value = "">
            <!-- <option selected>Open this select menu</option> -->
            <option value="{{$site->category}}">{{$site->category}}</option>
            <!-- <option value="{{$site->category}}">{{$site->category_name}}</option> -->
            <option value="Software" disabled>-----</option>
            @foreach($category as $category)
            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
            <!-- <option value="{{_('$category->id')}}">{{_('$site->category_name')}}</option> -->
            @endforeach
        </select>
      <div class="invalid-feedback">@error('category') {{message}}@enderror </div>
    </div>

    <div class="col-12">
      <label for="yourUsername" class="form-label">Site Url</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">%</span>
        <input type="text" name="url" class="form-control" id="yourUsername" value = "{{$site->url}}" required>
        <div class="invalid-feedback">Please enter url.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Create Site</button>
    </div>
  </form>

</div>
</div>


@endsection