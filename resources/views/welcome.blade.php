
@extends('layouts.guest')
  @section('content')
  <!-- Customers Card -->
  <div class="col-xxl-4 col-xl-12">

<div class="card info-card customers-card">

  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
        <h6>Filter</h6>
      </li>

      <li><a class="dropdown-item" href="#">Today</a></li>
      <li><a class="dropdown-item" href="#">This Month</a></li>
      <li><a class="dropdown-item" href="#">This Year</a></li>
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Customers <span>| This Year</span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-people"></i>
      </div>
      <div class="ps-3">
        <h6>1244</h6>
        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->



<!-- Top Selling -->
<div class="col-12">
<div class="card top-selling overflow-auto">

  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
        <h6>Filter</h6>
      </li>

      <li><a class="dropdown-item" href="#">Today</a></li>
      <li><a class="dropdown-item" href="#">This Month</a></li>
      <li><a class="dropdown-item" href="#">This Year</a></li>
    </ul>
  </div>

  <div class="card-body pb-0">
    <h5 class="card-title">Top Selling <span>| Today</span></h5>

    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Preview</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Sold</th>
          <th scope="col">Revenue</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
          <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
          <td>$64</td>
          <td class="fw-bold">124</td>
          <td>$5,828</td>
        </tr>
        <tr>
          <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
          <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
          <td>$46</td>
          <td class="fw-bold">98</td>
          <td>$4,508</td>
        </tr>
        <tr>
          <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
          <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
          <td>$59</td>
          <td class="fw-bold">74</td>
          <td>$4,366</td>
        </tr>
        <tr>
          <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
          <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
          <td>$32</td>
          <td class="fw-bold">63</td>
          <td>$2,016</td>
        </tr>
        <tr>
          <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
          <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
          <td>$79</td>
          <td class="fw-bold">41</td>
          <td>$3,239</td>
        </tr>
      </tbody>
    </table>

  </div>

</div>
</div><!-- End Top Selling -->

@endsection
