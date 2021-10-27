@extends('layouts/contentLayoutMaster')

@section('title', 'Device Lists')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
@endsection

@section('content')


<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">

  <!-- List DataTable -->
  {{-- <div class="row">
    <div class="col-12">
      <div class="card invoice-list-wrapper">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather="trending-up"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class="text-truncate">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div> --}}
  <!--/ List DataTable -->

  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-center">
                <tr>
                  <th>Device ID</th>
                  <th>Sensory Type</th>
                  <th>Alert Trigger</th>
                  <th>Start Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/icons/brands/social-label.png')}}" 
                        class="rounded me-1"
                        height="30"/>
                      <div>
                        <div class="fw-bolder">122000</div>
                        {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Temperature</div>
                        <div class="font-small-2 text-muted">Weather</div> 
                      </div>
                      
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">5</span>
                    </div>
                  </td>
                  <td>1 month ago</td>
                  <td>
                    <button type="submit" class="btn btn-primary me-1">Open</button>
                  </td>
                </tr>
                <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">223151</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Humidity</div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">14</span>
                      </div>
                    </td>
                    <td>4 month ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">124411</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Humidity</div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">0</span>
                      </div>
                    </td>
                    <td>1 days ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">199000</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Temperature</div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">2</span>
                      </div>
                    </td>
                    <td>12 days ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">886942</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Temperature</div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">0</span>
                      </div>
                    </td>
                    <td>2 month ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">663318</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Wind </div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">1</span>
                      </div>
                    </td>
                    <td>3 month ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                          <img src="{{asset('images/icons/brands/social-label.png')}}" 
                          class="rounded me-1"
                          height="30"/>
                        <div>
                          <div class="fw-bolder">775211</div>
                          {{-- <div class="font-small-2 text-muted">meguc@ruj.io</div> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary me-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <div>
                          <div class="fw-bolder">Clouds </div>
                          <div class="font-small-2 text-muted">Weather</div> 
                        </div>
                        
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="fw-bolder mb-25">5</span>
                      </div>
                    </td>
                    <td>1 month ago</td>
                    <td>
                      <button type="submit" class="btn btn-primary me-1">Open</button>
                    </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->

</section>
<!-- Basic Vertical form layout section end -->


@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js'))}}"></script>
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js'))}}"></script>
@endsection
