@extends('layouts.app')
@section('breadcrumb')
<li>
  <a href="/residentials">
    Residentials
  </a>
</li>
<li>
  <a href="/families">
    Families
  </a>
</li>
<li class="active">32712728791872879</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <form action="#">
        <div class="panel-body frame">
          @include('families/fields')
          @include('families/address_tab', ['address_options_available' => true, 'new_address' => $new_address])
          <div class="row">
            <div class="col-lg-12">
              <ul class="nav nav-tabs" role="tablist">
                <li class="active" role="presentation">
                  <a href="#" role="tab">
                    <i class="glyphicon glyphicon-list"></i>
                    Members
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="glyphicon glyphicon-plus"></i>
                    Member
                  </a>
                </li>
                <li class="pull-right">
                  @include('shared/row_bulk_action_menu')
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active">
                  <div class="panel panel-default panel-folder">
                    <div class="panel-body">
                      <table class="table table-stripped">
                        <thead>
                          <th style="width: 24px;">
                            <label for="check_all_family_members">
                              <input type="checkbox" id="check_all_family_members" data-toggle="checktablerows" data-target=".row-checkbox">
                            </label>
                          </th>
                          <th style="width: 280px;">Name</th>
                          <th style="width: 180px;">In-family Status</th>
                          <th style="width: 180px;">Father Name</th>
                          <th style="width: 180px;">Mother Name</th>
                          <th style="width: 60px;"></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
                            </td>
                            <td class="form-group">
                              <input type="hidden" name="family[member_id][]">
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-search"></i>
                                </span>
                                <input type="text" class="form-control" name="family[member_name][]" id="family_member_name_0" value="Sarah O'Connor">
                                <div class="input-group-btn">
                                  <button type="button" class="btn btn-success">
                                    <i class="glyphicon glyphicon-plus"></i>
                                  </button>
                                </div>
                              </div>
                            </td>
                            <td class="form-group">
                              <select name="family[membership_status][]" id="family_membership_status_0" class="form-control">
                                <option value="0">Householder</option>
                                <option value="1" selected>Spouse/Wife</option>
                                <option value="2">Biological Children</option>
                                <option value="3">Step Child</option>
                                <option value="4">Other</option>
                              </select>
                            </td>
                            <td class="form-group">
                              <input type="text" class="form-control" name="family[member_father_name][]" id="family_member_father_name_0">
                            </td>
                            <td class="form-group">
                              <input type="text" class="form-control" name="family[member_mother_name][]" id="family_member_mother_name_0">
                            </td>
                            <td>
                              @include('shared/row_elipsis_menu', ['resource' => 'family_members', 'id' => 1])
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
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
</div>
@endsection
