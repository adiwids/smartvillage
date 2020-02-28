@extends('layouts.app')
@section('breadcrumb')
<li class="active">General Settings</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <a href="#village_information" data-toggle="tab">
          <i class="glyphicon glyphicon-home"></i>
          Village Information
        </a>
      </li>
      <li role="presentation">
        <a href="#administrative_office" data-toggle="tab">
          <i class="glyphicon glyphicon-briefcase"></i>
          Administrative Office
        </a>
      </li>
    </ul>
    <form action="/settings" method="post">
      <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="village_information">
          <div class="panel panel-default panel-folder">
              <div class="panel-body">
                <div class="row">
                  <div class="form-group col-lg-6 required">
                    <label for="village_name" class="control-label">Name</label>
                    <input type="text" name="village[name]" id="village_name" class="form-control" value="{{ $village->name }}">
                  </div>
                  <div class="form-group col-lg-3 col-lg-offset-1">
                    <label for="village_neighborhood1" class="control-label">
                      Neighborhood
                      <small class="hint">RT/RW</small>
                    </label>
                    <div class="row">
                      <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control text-right" name="village[neighborhood][0]" id="village_neighborhood1" value="{{ $village->neighborhood_rt }}">
                      </div>
                      <div class="col-lg-1 col-md-1"><span>/</span></div>
                      <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control text-right" name="village[neighborhood][1]" value="{{ $village->neighborhood_rw }}">
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
            </form>
          </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="administrative_office">
          <div class="panel panel-default panel-folder">
              <div class="panel-body">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="village_chairman_id" class="control-label">Chairman</label>
                    <input type="hidden" name="village[chairman_id]" id="village_chairman_id" value="{{ $village->chairman_id }}">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                      <input type="text" class="form-control" name="village[chairman_name]" id="village_chairman_name" value="{{ $village->chairman_name }}">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="village_chairman_phone_number" class="control-label">Phone</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-phone"></i>
                      </span>
                      <input type="text" class="form-control" name="village[chairman_phone_number]" id="village_chairman_phone_number" value="{{ $village->chairman_phone_number }}">
                    </div>
                  </div>
                </div>
                @include('families/address_tab', ["address_options_available" => FALSE])
              </div>
              <div class="panel-footer">
                @include('shared/form_save_or_cancel_buttons')
              </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
