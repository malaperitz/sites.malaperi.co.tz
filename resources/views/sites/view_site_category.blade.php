@extends('layouts.guest')
@section('content')
   <!-- Top Selling -->
   <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{route('view.site')}}">All</a></li>
                    <li><a class="dropdown-item" href="{{route('view.site.softwares')}}">Softwares</a></li>
                    <li><a class="dropdown-item" href="{{route('view.site.musics')}}">Musics</a></li>
                    <li><a class="dropdown-item" href="{{route('view.site.movies')}}">Movies</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Sites  <span>| {{$category}}</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">name</th>
                        <th scope="col">category</th>
                        <th scope="col">url</th>
                        <th scope="col">
                        @permission(['site-delete','site-update','site-create'])
                        <a  href="{{route('create.site')}}" class="btn btn-outline-success btn-sm">create</a>
                        @endpermission
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($site as $site)
                      <tr>
                        <th scope="row"><a href="{{$site->url}}" target="_blank"><img src="{{ asset('assets/img/'.$site->siteCategory->icon)}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">{{$site->name}}</a></td>
                        <td>{{$site->siteCategory->category_name}}</td>
                        <td class="fw-bold">{{$site->url}}</td>
                        <td>
                        @permission(['site-delete','site-update'])
                            <a  href="{{route('edit.site')}}" class="btn btn-outline-info btn-sm">update</a>
                        @endpermission
                            <a  href="{{url($site->url)}}" target="#" class="btn btn-outline-info btn-sm"><i class="bi bi-link""></i></a>
                        </td>
                      </tr>

                        @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
            @endsection