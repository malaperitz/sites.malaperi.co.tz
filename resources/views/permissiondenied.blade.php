@extends('layouts.main')

@section('content')

                  
           
  <!-- eCommerce statistic -->
  <div class="row">
          
          <div class="col-xl-12 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">Access Denied</h3>
                      <h6>You do not have permission to perform this action! </h6>
                    </div>
                    <div>
                      <i class="icon-lock danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ eCommerce statistic -->
@endsection
