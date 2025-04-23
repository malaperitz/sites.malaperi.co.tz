@extends('layouts.main')
@section('content')

    
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

    

 
            @foreach($sitecategory as $sitecategory)

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{route('view.site.site_category', $sitecategory->category_name)}}">sites</a></li>
                    
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">{{$sitecategory->category_name}} 
                    <!-- <span>| This Year</span> -->
                
                </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-peoplea">  <!-- <i class="bi bi-people"></i> -->
                      <img src="assets/img/{{$sitecategory->icon}}" class="icon image image-round rounded-circle" height="60px" width="60px" alt=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$sitecategory->countSitesInCategory($sitecategory->id)}}</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            @endforeach

          </div>
        </div><!-- End Left side columns -->

       
        @endsection