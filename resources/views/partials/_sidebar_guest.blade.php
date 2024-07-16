<?php $categories = App\Models\SiteCategory::all();?>  
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('login')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sites</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        @foreach($categories as $categoryz)
          <li>
            <a href="{{route('view.site.site_category', $categoryz->category_name)}}">
              <i class="bi bi-cursor"></i><span>{{$categoryz->category_name}}</span>
            </a>
          </li>
          @endforeach
       
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Ajira</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>Admissions</span>
            </a>
          </li>
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>Employments</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gospel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>Tenzi</span>
            </a>
          </li>
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>Praise</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('login')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('login')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact us</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('register')}}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('login')}}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
