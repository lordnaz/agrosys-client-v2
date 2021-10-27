@extends('layouts/contentLayoutMaster')

@section('title', 'Add Device')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css'))}}">
@endsection

@section('content')


<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Device</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical">
            <div class="row">
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-icon">Device ID</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i data-feather="user"></i></span>
                    <input
                      type="number"
                      id="first-name-icon"
                      class="form-control"
                      name="fname-icon"
                      placeholder="eg: 192111"
                    />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label" for="contact-info-icon">Sensory Type</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i data-feather="smartphone"></i></span>
                    <select class="form-select" id="basicSelect">
                        <option selected="true" disabled="" value="">Choose Type</option>
                        <option>Temperature</option>
                        <option>Air (Atmospheric) Pressure</option>
                        <option>Wind (Speed & Direction)</option>
                        <option>Humidity</option>
                        <option>Precipitation</option>
                        <option>Visibility</option>
                        <option>Clouds (Type & Cover)</option>
                        <option>Sunshine Duration</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label" for="email-id-icon">Description</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i data-feather="mail"></i></span>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Some description..."></textarea>
                    {{-- <input
                      type="email"
                      id="email-id-icon"
                      class="form-control"
                      name="email-id-icon"
                      placeholder="Email"
                    /> --}}
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label" for="password-icon">Set Threshold (Optional)</label>
                  <div class="input-group input-group-lg">
                    <input type="number" class="touchspin" value="50" />
                  </div>
                </div>
              </div>
              {{-- <div class="col-12">
                <div class="mb-1">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck4" />
                    <label class="form-check-label" for="customCheck4">Remember me</label>
                  </div>
                </div>
              </div> --}}
              <div class="col-12 mt-2" style="text-align: right !important;">
                <button type="submit" class="btn btn-primary me-1">Add Device</button>
                {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Vertical form layout section end -->


@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js'))}}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js'))}}"></script>
@endsection
