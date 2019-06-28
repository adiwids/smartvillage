@extends('residents.edit')
@section('breadcrumb')
<li>
  <a href="/residentials">Residentials</a>
</li>
<li>
  <a href="/residentials/residents">Residents</a>
</li>
<li>
  <a href="/residents/1/edit">3271272879187287</a>
</li>
<li class="active">Family</li>
@endsection
@section('tab-content')
<div class="row">
  <div class="col-lg-12">
    <a href="/families/1/edit" class="btn btn-link has-icon pull-right">
      <i class="glyphicon glyphicon-pencil"></i>
      Manage
    </a>
  </div>
</div>
<div class="row">
  <div class="form-horizontal family-data">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="family_householder" class="control-label">Householder Name</label>
        <span id="family_householder">John Doe</span>
      </div>
      <div class="form-group">
        <label for="family_address_line_1" class="control-label">Address</label>
        <span id="family_address_line_1">1st Lane Ave</span>
      </div>
      <div class="form-group">
        <label for="family_address_neighborhood" class="control-label">
          Neighborhood
          <small class="hint">RT/RW</small>
        </label>
        <span id="family_address_neighborhood">001/001</span>
      </div>
      <div class="form-group">
        <label for="family_address_village" class="control-label">Village</label>
        <span id="family_address_village">Village Name</span>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label for="family_address_subdistrict" class="control-label">
          Sub-district
          <small class="hint">Kecamatan</small>
        </label>
        <span id="family_address_subdistrict">Kecamatan</span>
      </div>
      <div class="form-group">
        <label for="family_address_district" class="control-label">
          District
          <small class="hint">Kota or Kabupaten</small>
        </label>
        <span id="family_address_district">Kabupaten/Kota</span>
      </div>
      <div class="form-group">
        <label for="family_address_zipcode" class="control-label">Zipcode</label>
        <span id="family_address_zipcode">40111</span>
      </div>
      <div class="form-group">
        <label for="family_address_province" class="control-label">Province</label>
        <span id="family_address_province">West Java</span>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <h4><strong>Members</strong></h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 24px;">#</th>
          <th>Full Name</th>
          <th>Number</th>
          <th>Gender</th>
          <th style="width: 60px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>
            John Doe
            <small>(Householder)</small>
          </td>
          <td>3271272879187287</td>
          <td>Male</td>
          <td>
            <a href="#" class="has-icon" data-toggle="popover"
                                         data-html="true"
                                         data-html-content="#residents_row_1"
                                         data-placement="top"
                                         data-trigger="focus">
              <i class="glyphicon glyphicon-option-vertical"></i>
            </a>
            <div class="popover-content hidden" id="residents_row_1">
              <ul class="nav">
                <li>
                  <a href="/residents/1/edit" class="has-icon">
                    <i class="glyphicon glyphicon-pencil"></i>
                    Edit
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>
            Sarah O'Connor
            <small>(Spouse)</small>
          </td>
          <td>3271272879187123</td>
          <td>Female</td>
          <td>
            <a href="#" class="has-icon" data-toggle="popover"
                                         data-html="true"
                                         data-html-content="#residents_row_1"
                                         data-placement="top"
                                         data-trigger="focus">
              <i class="glyphicon glyphicon-option-vertical"></i>
            </a>
            <div class="popover-content hidden" id="residents_row_1">
              <ul class="nav">
                <li>
                  <a href="/residents/1/edit" class="has-icon">
                    <i class="glyphicon glyphicon-pencil"></i>
                    Edit
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
