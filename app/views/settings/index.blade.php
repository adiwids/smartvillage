@extends('layouts.app')
@section('breadcrumb')
<li class="active">General Settings</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"{{ $tab == "village_information" ? " class=active" : "" }}>
        <a href="#village_information" data-toggle="tab">
          <i class="glyphicon glyphicon-home"></i>
          Village Information
        </a>
      </li>
      <li role="presentation"{{ $tab == "officer" ? " class=active" : "" }}>
        <a href="#officer" data-toggle="tab">
          <i class="glyphicon glyphicon-briefcase"></i>
          Officer
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane{{ $tab == 'village_information' ? ' active' : '' }}" role="tabpanel" id="village_information">
        <form action="/settings" method="post">
          <div class="panel panel-default panel-folder">
              <div class="panel-body">
                <div class="row">
                  <div class="form-group col-lg-6 required">
                    <label for="village_name" class="control-label">Name</label>
                    <input type="text" name="village[name]" id="village_name" class="form-control" value="{{ $village->name }}">
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="village_neighborhood_rt" class="control-label">
                      Neighborhood
                      <small class="hint">RT/RW</small>
                    </label>
                    <div class="row">
                      <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control text-right" name="village[neighborhood_rt]" id="village_neighborhood_rt" value="{{ $village->neighborhood_rt }}">
                      </div>
                      <div class="col-lg-1 col-md-1"><span>/</span></div>
                      <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control text-right" name="village[neighborhood_rw]" value="{{ $village->neighborhood_rw }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="village_subdistrict" class="control-label">
                      Sub-district
                      <small class="hint">Kecamatan</small>
                    </label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-search"></i>
                      </span>
                      <input type="text" class="form-control" name="village[subdistrict]" id="village_subdistrict" value="{{ $village->subdistrict }}">
                    </div>
                  </div>
                  <div class="form-group col-lg-4 required">
                    <label for="village_district" class="control-label">
                      District
                      <small class="hint">Kota or Kabupaten</small>
                    </label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-search"></i>
                      </span>
                      <input type="text" class="form-control" name="village[district]" id="village_district" value="{{ $village->district }}">
                    </div>
                  </div>
                  <div class="form-group col-lg-4 required">
                    <label for="village_province" class="control-label">Province</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-search"></i>
                      </span>
                      <input type="text" class="form-control" name="village[province]" id="village_province" value="{{ $village->province }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-2 required">
                    <label for="village_zipcode" class="control-label">Zipcode</label>
                    <input type="text" class="form-control text-right" name="village[zipcode]" id="village_zipcode" value="{{ $village->zipcode }}">
                  </div>
                  <div class="form-group col-lg-5">
                    <label for="village_country" class="control-label">Country</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-flag"></i>
                      </span>
                      <input type="text" class="form-control" name="village[country]" id="village_country" value="{{ $village->country }}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                @include('shared/form_save_or_cancel_buttons')
              </div>
          </div>
        </form>
      </div>
      <div class="tab-pane{{ $tab == 'officer' ? ' active' : '' }}" role="tabpanel" id="officer">
        <form action="/officers" method="post">
          <input type="hidden" name="back_to" value="/settings?tab=officer">
          <div class="panel panel-default panel-folder">
            <div class="panel-body">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="officer_resident_id" class="control-label">Chairman</label>
                  <input type="hidden" name="officer[resident_id]" id="officer_resident_id" value="{{ $officer->resident_id }}">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="officer[full_name]" id="officer_full_name" value="{{ $officer->full_name }}">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                      <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-5">
                  <label for="officer_phone" class="control-label">Mobile</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-phone"></i>
                    </span>
                    <input type="text" class="form-control" name="officer[phone]" id="officer_phone" value="{{ $officer->phone }}">
                  </div>
                </div>
                <div class="form-group col-lg-5">
                  <label for="officer_email" class="control-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <input type="text" class="form-control" name="officer[email]" id="officer_email" value="{{ $officer->email }}">
                  </div>
                </div>
              </div>
              @include('families/address_tab', ["address_options_available" => FALSE, "address" => $new_address])
            </div>
            <div class="panel-footer">
              @include('shared/form_save_or_cancel_buttons')
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
