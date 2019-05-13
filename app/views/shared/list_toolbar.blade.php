<div class="row">
  <div class="col-md-2 col-lg-2 form-group">
    <select name="" id="" class="form-control">
      <option value="name">Name</option>
    </select>
  </div>
  <div class="col-md-7 col-lg-7">
    <form action="#">
      <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search keyword">
        <div class="input-group-btn">
          <button class="btn btn-default">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="bulk-action pull-right">
      @include('shared/row_bulk_action_menu')
    </div>
  </div>
</div>
