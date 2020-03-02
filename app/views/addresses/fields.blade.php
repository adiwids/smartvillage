<div class="row">
  <div class="col-lg-2 col-md-2">
    <div class="checkbox">
      <label for="address_origin" class="control-label">
        <input type="checkbox" name="address[origin]" id="address_origin"{{ $address->isOrigin() ? " checked='checked'" : "" }}> Origin
      </label>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="checkbox">
      <label for="address_current" class="control-label">
        <input type="checkbox" name="address[current]" id="address_current"{{ $address->isOrigin() ? " checked='checked'" : "" }}> Set as current
      </label>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6">
    <div class="form-group required">
      <label for="address_line1" class="control-label">Line #1</label>
      <input type="text" name="address[line1]" id="address_line1" class="form-control">
    </div>
  </div>
  <div class="col-lg-2 col-md-2">
    <div class="form-group required">
      <label for="address_number" class="control-label">Number</label>
      <input type="text" name="address[number]" id="address_number" class="form-control text-right" value="{{ $address->number }}">
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="address_neighborhood_rt" class="control-label">
        Neighborhood
        <small class="hint">RT/RW</small>
      </label>
      <div class="row">
        <div class="col-lg-5 col-md-5">
          <input type="text" class="form-control text-right" name="address[neighborhood_rt]" id="address_neighborhood_rt" value="{{ $address->neighborhood_rt }}">
        </div>
        <div class="col-lg-1 col-md-1"><span>/</span></div>
        <div class="col-lg-5 col-md-5">
          <input type="text" class="form-control text-right" name="address[neighborhood_rw]" value="{{ $address->neighborhood_rw }}">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-8 col-md-8">
    <div class="form-group">
      <label for="address_line2" class="control-label">Line #2</label>
      <input type="text" name="address[line2]" id="address_line2" class="form-control">
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="address_ownership" class="control-label">Ownership</label>
      <select name="address[ownership]" id="address_ownership" class="form-control">
        <option value="permanent" selected>Permanent</option>
        <option value="renting">Renting</option>
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="address_village_name" class="control-label">Village</label>
      <input type="text" class="form-control" name="address[village_name]" id="address_village_name" value="{{ $address->village_name }}">
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="address_subdistrict" class="control-label">
        Sub-district
        <small class="hint">Kecamatan</small>
      </label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-search"></i>
        </span>
        <input type="text" class="form-control" name="address[subdistrict]" id="address_subdistrict" value="{{ $address->subdistrict }}">
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group required">
      <label for="address_district" class="control-label">
        District
        <small class="hint">Kota or Kabupaten</small>
      </label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-search"></i>
        </span>
        <input type="text" class="form-control" name="address[district]" id="address_district" value="{{ $address->district }}">
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-4">
    <div class="form-group required">
      <label for="address_province" class="control-label">Province</label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-search"></i>
        </span>
        <input type="text" class="form-control" name="address[province]" id="address_province" value="{{ $address->province }}">
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-2">
    <div class="form-group required">
      <label for="address_zipcode" class="control-label">Zipcode</label>
      <input type="text" class="form-control text-right" name="address[zipcode]" id="address_zipcode" value="{{ $address->zipcode }}">
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="form-group">
      <label for="address_country" class="control-label">Country</label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-flag"></i>
        </span>
        <input type="text" class="form-control" name="address[country]" id="address_country" value="{{ $address->country }}">
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="form-group">
      <label for="address_phone" class="control-label">Phone</label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-phone-alt"></i>
        </span>
        <input type="text" class="form-control" name="address[phone]" id="address_phone" value="{{ $address->phone }}">
      </div>
    </div>
  </div>
</div>
