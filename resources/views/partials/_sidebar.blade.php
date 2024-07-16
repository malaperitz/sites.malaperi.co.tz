<?php $categories = App\Models\SiteCategory::all();?>  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sites</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('view.sitecategory')}}">
              <i class="bi bi-circle"></i><span>Site Category</span>
            </a>
          </li>
          <li>
            <a href="{{route('view.site')}}">
              <i class="bi bi-circle"></i><span>Sites</span>
            </a>
          </li>
          <li>
            <a href="{{route('login')}}">
              <i class="bi bi-circle"></i><span>SiteBycategory</span>
            </a>
          </li>
         
         
      
        </ul>
      </li><!-- End Sites Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-stack"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        
          <li>
            <a href="{{route('view.site')}}">
              <i class="bi bi-circle"></i><span>Sites</span>
            </a>
          </li>
            <a href="{{route('view.site')}}">
              <i class="bi bi-circle"></i><span>Softwares</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tags"></i><span>Site By Category</span><i class="bi bi-chevron-down ms-auto"></i>
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
      </li><!-- End Site By category Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->