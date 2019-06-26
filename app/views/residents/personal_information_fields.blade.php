<div class="form-group required">
  <label for="resident_number" class="control-label col-lg-3 col-md-3 col-sm-3">Number</label>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <input type="text" name="resident[number]" id="resident_number" class="form-control">
  </div>
  <div class="checkbox col-lg-3 col-md-3 col-sm-3">
    <label>
      <input type="checkbox" name="resident[temporary_number]"> Temporary
    </label>
  </div>
</div>
<div class="form-group required">
  <label for="resident_name" class="control-label col-lg-3 col-md-3 col-sm-3">Name</label>
  <div class="col-lg-9 col-md-9 col-sm-9">
    <input type="text" name="resident[name]" id="resident_name" class="form-control">
  </div>
</div>
<div class="form-group">
  <label for="resident_gender" class="control-label col-lg-3 col-md-3 col-sm-3">Gender</label>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="radio">
      <label for="resident_gender_male">
        <input type="radio" name="resident[gender]" id="resident_gender_male" checked> Male
      </label>
    </div>
    <div class="radio">
      <label for="resident_gender_female" class="radio">
        <input type="radio" name="resident[gender]" id="resident_gender_female"> Female
      </label>
    </div>
  </div>
  <label for="resident_blood_type" class="control-label col-lg-2 col-md-2 col-sm-2">Blood Type</label>
  <div class="col-lg-2 col-md-2 col-sm-2">
    <select name="resident[blood_type]" id="resident_blood_type" class="form-control">
      <option value="A+" selected>A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label for="resident_place_of_birth" class="control-label col-lg-3 col-md-3 col-sm-3">Place & Date of Birth</label>
  <div class="col-lg-5 col-md-5 col-sm-5">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-search"></i>
      </span>
      <input type="text" name="resident[place_of_birth]" id="resident_place_of_birth" class="form-control">
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <input type="text" name="resident[date_of_birth]" id="resident_date_of_birth" class="form-control">
    </div>
  </div>
</div>
<div class="form-group">
  <label for="resident_nationality" class="control-label col-lg-3 col-md-3 col-sm-3">Nationality</label>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <select name="resident[nationality]" id="resident_nationality" class="form-control">
      <option value="domestic" selected>Domestic</option>
      <option value="foreign">Foreign</option>
    </select>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-flag"></i>
      </span>
      <input type="text" name="resident[origin_country]" class="form-control" value="">
    </div>
  </div>
</div>
<div class="form-group">
  <label for="resident_religion" class="control-label col-lg-3 col-md-3 col-sm-3">Religion</label>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <select name="resident[religion]" id="resident_religion" class="form-control">
      <option value="islam">Islam</option>
      <option value="christian">Catholic</option>
      <option value="christian">Protestant</option>
      <option value="hindu">Hindu</option>
      <option value="buddha">Buddha</option>
      <option value="other">Other...</option>
    </select>
  </div>
  <label for="resident_marriage_status" class="control-label col-lg-2 col-md-2 col-sm-2">Marriage Status</label>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <select name="resident[mariage_status]" id="resident_marriage_status" class="form-control">
      <option value="b" selected>Single</option>
      <option value="s">Married</option>
      <option value="p">Divorced</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label for="resident_disability" class="control-label col-lg-3 col-md-3 col-sm-3">Disability</label>
  <div class="col-lg-9 col-md-9 col-sm-9">
    <div class="checkbox">
      <label>
        <input type="checkbox" name="resident[disability][]" value="1"> Physically
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="resident[disability][]" value="2"> Blind
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="resident[disability][]" value="3"> Deaf
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="resident[disability][]" value="4"> Mentally
      </label>
    </div>
    <div class="checkbox">
      <label class="col-lg-12 col-md-12 col-sm-12">
        <input type="checkbox" name="resident[disability][]" value="5"> Other
      </label>
      <div class="form-group col-lg-6">
        <input type="text" name="resident[disability][]" class="form-control">
      </div>
    </div>
  </div>
</div>
