<div class="row">
  <div class="form-group col-lg-6 col-md-6 required">
    <label for="education_institution" class="control-label">Institution/College/School</label>
    <input type="text" name="education[institution]" id="education_institution" class="form-control">
  </div>
  <div class="form-group col-lg-3 col-md-3 required">
    <label for="education_registered_at" class="control-label">Register Year</label>
    <div class="input-group">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <input type="text" name="education[registered_at]" id="education_registered_at" class="form-control">
    </div>
  </div>
  <div class="form-group col-lg-3 col-md-3 required">
    <label for="education_graduated_at" class="control-label">Graduation Year</label>
    <div class="input-group">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <input type="text" name="education_graduated_at]" id="education_graduated_at" class="form-control">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-lg-3 col-md-3 required">
    <label for="education_degree" class="control-label">Degree</label>
    <select name="education[degree]" id="education_degree" class="form-control">
      <option value="elementary">Elementary School</option>
      <option value="junior">Junior High School</option>
      <option value="senior">Senior High School</option>
      <option value="diploma">Diploma: I, II, III</option>
      <option value="bachelor">Strata I</option>
      <option value="master">Strata II</option>
      <option value="professor">Strata III</option>
    </select>
  </div>
  <div class="form-group col-lg-3 col-md-3">
    <label for="education_title" class="control-label">Title</label>
    <input type="text" name="education[title]" id="education_title" class="form-control">
  </div>
</div>
