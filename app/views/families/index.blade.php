@extends('layouts.app')
@section('breadcrumb')
<li>
  <a href="/residentials">
    Residentials
  </a>
</li>
<li class="active">
  Families
</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <a href="#list" role="tab" aria-controls="list" data-toggle="tab">
          <i class="glyphicon glyphicon-list"></i>
          List
        </a>
      </li>
      <li role="presentation">
        <a href="#form" role="tab" aria-controls="form" data-toggle="tab">
          <i class="glyphicon glyphicon-plus"></i>
          Family
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="list">
        <div class="panel panel-default panel-folder">
          <div class="panel-body">
            @include('shared/list_toolbar')
            <table class="table">
              <thead>
                <tr>
                  <th>
                    <label for="check_all_families">
                      <input type="checkbox" id="check_all_families" data-toggle="checktablerows" data-target=".row-checkbox">
                    </label>
                  </th>
                  <th>Number</th>
                  <th>Householder</th>
                  <th># of Members</th>
                  <th style="width: 60px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 24px;">
                    <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
                  </td>
                  <td>32712728791872879</td>
                  <td>John Doe</td>
                  <td>1</td>
                  <td>
                    @include('shared/row_elipsis_menu', ['resource' => 'families', 'id' => 1])
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-lg-9 col-md-9">
                @include('shared/pagination_bar', ['_class' => ['on-foot']])
              </div>
              <div class="col-lg-3 col-md-3 text-right">
                Displaying 1 of 1 record(s)
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="form">
        <div class="panel panel-default panel-folder">
          <form action="#">
            <div class="panel-body">
              @include('families/fields')
              @include('families/address_tab', ['address_options_available' => false, 'new_address' => $new_address])
            </div>
            <div class="panel-footer">
              @include('shared/form_save_or_cancel_buttons')
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
