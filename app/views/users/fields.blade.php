<div class="col-lg-8 col-md-8">
  <div class="row">
    <div class="form-group col-md-10 col-lg-10">
      <label for="user_resident_name" class="control-label">
        Resident
      </label>
      <div class="input-group">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
        </span>
        <input type="hidden" name="user[resident_id]" id="user_resident_id">
        <input type="text" class="form-control" name="user[resident_name]" id="user_resident_name">
        <div class="input-group-btn">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#user_lookup">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5 col-lg-4">
      <label for="user_name" class="control-label">Username</label>
      <input type="text" class="form-control" id="user_name" name="user[name]">
    </div>
    <div class="form-group col-md-7 col-lg-8 required">
      <label for="user_email" class="control-label">Email</label>
      <input type="email" class="form-control" id="user_email" name="user[email]" autocomplete="email" required>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6 col-lg-6 required">
      <label for="user_password" class="control-label">Password</label>
      <input type="password" class="form-control" id="user_password" name="user[password]" autocomplete="password" required>
    </div>
    <div class="form-group col-md-6 col-lg-6 required">
      <label for="user_password_confirmation" class="control-label">Re-type Password</label>
      <input type="password" class="form-control" id="user_password_confirmation" name="user[password_confirmation]" autocomplete="password" required>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-4">
  <div class="form-group required">
    <label for="user_role" class="control-label">Role</label>
    <select name="user[role]" id="user_role" class="form-control">
      <option value="chairman">Chairman</option>
      <option value="secretary">Secretary</option>
      <option value="exchequer">Exchequer</option>
      <option value="staff">Staff</option>
    </select>
  </div>
</div>
