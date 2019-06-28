<div class="row">
  <div class="form-group col-lg-6">
    <label for="family_number" class="control-label">Registration Number</label>
    <div class="row">
      <div class="col-lg-9">
        <input type="text" class="form-control" name="family[number]" id="family_number">
      </div>
      <div class="col-lg-1 checkbox">
        <label for="family_temporary_number">
          <input type="checkbox" name="family[temporary_number]" id="family_temporary_number">
          Temporary
        </label>
      </div>
    </div>
  </div>
  <div class="form-group col-lg-5 col-lg-offset-1">
    <label for="family_householder_id" class="control-label">Householder Name</label>
    <input type="hidden" id="family_householder_id">
    <div class="input-group">
      <input type="text" class="form-control" name="family[householder_name]" id="family_householder_name">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-search"></i>
      </span>
      <div class="input-group-btn">
        <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
      </div>
    </div>
  </div>
</div>
<fieldset class="row">
  <legend>Address</legend>
  @include('addresses/fields')
</fieldset>
