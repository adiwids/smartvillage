<div class="row">
  <div class="col-lg-4 col-md-4">
    <div class="form-group required">
      <label for="job_employer" class="control-label">Employer</label>
      <input type="text" class="form-control" name="job[employer]" id="job_employer">
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="job_position" class="control-label">Position</label>
      <input type="text" class="form-control" name="job[position]" id="job_position">
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group">
      <label for="job_salary_category" class="control-label">Monthly Salary Range</label>
      <select name="job[salary_category]" id="job_salary_category" class="form-control">
        <option value="0" selected>< Rp. 500.000,00</option>
        <option value="1">Rp. 500.000,00 - Rp. 4.500.000,00</option>
        <option value="2">> Rp. 4.500.000,00</option>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8 col-md-8">
    <div class="form-group required">
      <label for="job_started_at" class="control-label">Work Period</label>
      <div class="row">
        <div class="col-md-5 col-lg-5">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-calendar"></i>
            </span>
            <input type="text" class="form-control" name="job[started_at]" id="job_started_at">
          </div>
        </div>
        <div class="col-lg-1 col-md-1"><span>to</span></div>
        <div class="col-md-5 col-lg-5">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-calendar"></i>
            </span>
            <input type="text" class="form-control" name="job[resigned_at]" id="job_resigned_at">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="checkbox">
      <label for="job_current">
        <input type="checkbox" name="job[current]" id="job_current" value="1">
        Currently work here
      </label>
    </div>
  </div>
</div>
