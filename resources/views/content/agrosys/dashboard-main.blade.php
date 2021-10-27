
@extends('layouts/contentLayoutMaster')

@section('title', 'AgroSys')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">


    <div class="row match-height">

        <!-- Browser States Card -->
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card card-browser-states">
              <div class="card-header">
                <div>
                  <h4 class="card-title">Low Device Battery</h4>
                  {{-- <p class="card-text font-small-2">Counter August 2020</p> --}}
                </div>
                {{-- <div class="dropdown chart-dropdown">
                  <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Last 28 Days</a>
                    <a class="dropdown-item" href="#">Last Month</a>
                    <a class="dropdown-item" href="#">Last Year</a>
                  </div>
                </div> --}}
              </div>
              <div class="card-body">
                <div class="browser-states">
                    <div class="d-flex">
                        <h6 class="align-self-center mb-0">Device ID</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <h6 class="align-self-center mb-0">Percentage</h6>
                    </div>
                </div>
                <div class="browser-states">
                  <div class="d-flex">
                    <img
                      src="{{asset('images/icons/brands/social-label.png')}}"
                      class="rounded me-1"
                      height="30"
                      alt="Google Chrome"
                    />
                    <h6 class="align-self-center mb-0">281771</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fw-bold text-body-heading me-1">20.4%</div>
                    <div id="browser-state-chart-primary"></div>
                  </div>
                </div>
                <div class="browser-states">
                  <div class="d-flex">
                    <img
                    src="{{asset('images/icons/brands/social-label.png')}}"
                      class="rounded me-1"
                      height="30"
                      alt="Mozila Firefox"
                    />
                    <h6 class="align-self-center mb-0">371661</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fw-bold text-body-heading me-1">6.1%</div>
                    <div id="browser-state-chart-warning"></div>
                  </div>
                </div>
                <div class="browser-states">
                  <div class="d-flex">
                    <img
                    src="{{asset('images/icons/brands/social-label.png')}}"
                      class="rounded me-1"
                      height="30"
                      alt="Apple Safari"
                    />
                    <h6 class="align-self-center mb-0">227111</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fw-bold text-body-heading me-1">14.6%</div>
                    <div id="browser-state-chart-secondary"></div>
                  </div>
                </div>
                <div class="browser-states">
                  <div class="d-flex">
                    <img
                    src="{{asset('images/icons/brands/social-label.png')}}"
                      class="rounded me-1"
                      height="30"
                      alt="Internet Explorer"
                    />
                    <h6 class="align-self-center mb-0">499022</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fw-bold text-body-heading me-1">4.2%</div>
                    <div id="browser-state-chart-info"></div>
                  </div>
                </div>
                <div class="browser-states">
                  <div class="d-flex">
                    <img src="{{asset('images/icons/brands/social-label.png')}}" class="rounded me-1" height="30" alt="Opera Mini" />
                    <h6 class="align-self-center mb-0">599440</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fw-bold text-body-heading me-1">8.4%</div>
                    <div id="browser-state-chart-danger"></div>
                  </div>
                </div>
                <div class="row text-center mt-2">
                    <a href="#">See More</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Browser States Card -->
          
        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
          <div class="card card-statistics">
            <div class="card-header">
              <h4 class="card-title">Statistics</h4>
              <div class="d-flex align-items-center">
                <p class="card-text font-small-2 me-25 mb-0">Last update 22 days ago</p>
              </div>
            </div>
            <div class="card-body statistics-body">
              <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                  <div class="d-flex flex-row">
                    <div class="avatar bg-light-warning me-2">
                      <div class="avatar-content">
                        <i data-feather="trending-up" class="avatar-icon"></i>
                      </div>
                    </div>
                    <div class="my-auto">
                      <h4 class="fw-bolder mb-0">46</h4>
                      <p class="card-text font-small-3 mb-0">Threshold</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                  <div class="d-flex flex-row">
                    <div class="avatar bg-light-info me-2">
                      <div class="avatar-content">
                        <i data-feather="user" class="avatar-icon"></i>
                      </div>
                    </div>
                    <div class="my-auto">
                      <h4 class="fw-bolder mb-0">9</h4>
                      <p class="card-text font-small-3 mb-0">Total Devices</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                  <div class="d-flex flex-row">
                    <div class="avatar bg-light-danger me-2">
                      <div class="avatar-content">
                        <i data-feather="box" class="avatar-icon"></i>
                      </div>
                    </div>
                    <div class="my-auto">
                      <h4 class="fw-bolder mb-0 text-danger">2</h4>
                      <p class="card-text font-small-3 mb-0 text-danger"><strong>Inactive Device</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                  <div class="d-flex flex-row">
                    <div class="avatar bg-light-success me-2">
                      <div class="avatar-content">
                        <i data-feather="box" class="avatar-icon"></i>
                      </div>
                    </div>
                    <div class="my-auto">
                      <h4 class="fw-bolder mb-0">7</h4>
                      <p class="card-text font-small-3 mb-0">Active Device</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Statistics Card -->
      </div>
  
  <div class="row match-height">
      <!-- Line Chart Starts -->
    <div class="col-8">
        <div class="card">
          <div
            class="
              card-header
              d-flex
              flex-sm-row flex-column
              justify-content-md-between
              align-items-start
              justify-content-start
            "
          >
            <div>
              <h4 class="card-title mb-25">Temperature</h4>
              <span class="card-subtitle text-muted">Farms & Agriculture Network</span>
            </div>
            <div class="d-flex align-items-center flex-wrap mt-sm-0 mt-1">
              <h5 class="fw-bolder mb-0 me-1">Current Weather: </h5>
              <span class="badge badge-light-secondary">
                <i class="text-danger font-small-3" data-feather="cloud-rain"></i>
                <span class="align-middle">Raining</span>
              </span>
            </div>
          </div>
          <div class="card-body">
            <div id="line-chart"></div>
          </div>
        </div>
      </div>
      <!-- Line Chart Ends -->

      <!-- Support Tracker Chart Card starts -->
    <div class="col-lg-4 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between pb-0">
            <h4 class="card-title">Overall System Health</h4>
            <div class="dropdown chart-dropdown">
              <button
                class="btn btn-sm border-0 dropdown-toggle p-50"
                type="button"
                id="dropdownItem4"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <small>
                    35 Minutes Ago
                </small>
              </button>
              {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                <a class="dropdown-item" href="#">Last 28 Days</a>
                <a class="dropdown-item" href="#">Last Month</a>
                <a class="dropdown-item" href="#">Last Year</a>
              </div> --}}
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              {{-- <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                <h1 class="font-large-2 fw-bolder mt-2 mb-0">163</h1>
                <p class="card-text">Tickets</p>
              </div> --}}
              <div class="col-sm-12 col-12 d-flex justify-content-center">
                <div id="support-trackers-chart"></div>
              </div>
            </div>
            <div class="d-flex justify-content-between mt-1">
              <div class="text-center">
                <p class="card-text mb-50">Inactive</p>
                <span class="font-large-1 text-danger fw-bold">2</span>
              </div>
              <div class="text-center">
                <p class="card-text mb-50">Active</p>
                <span class="font-large-1 text-success fw-bold">7</span>
              </div>
              <div class="text-center">
                <p class="card-text mb-50">Response Time</p>
                <span class="font-large-1 fw-bold">1 Hour</span>
              </div>
            </div>

            <div class="row text-center mt-4">
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Info</h4>
                    <div class="alert-body">
                        <small>Click on number to view available device</small>
                    </div>
                </div>
                
            </div>
            
          </div>
        </div>
      </div>
      <!-- Support Tracker Chart Card ends -->

  </div>

  

  
  </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/charts/chart-apex.js')) }}"></script>
@endsection
