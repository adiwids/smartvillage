@extends('residents.edit')
@section('breadcrumb')
<li>
  <a href="/residentials">Residentials</a>
</li>
<li>
  <a href="/residentials/residents">Residents</a>
</li>
<li>
  <a href="/residents/1/edit">3271272879187287</a>
</li>
<li class="active">Addresses</li>
@endsection
@section('tab-content')
<div class="panel-body">
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
        Address
      </a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" role="tabpanel" id="list">
      <div class="panel panel-default panel-folder">
        <div class="panel-body">
          @include('shared/list_toolbar')
          <table class="table">
            <thead>
              <tr>
                <th>
                  <label for="check_all_users">
                    <input type="checkbox" id="check_all_users" data-toggle="checktablerows" data-target=".row-checkbox">
                  </label>
                </th>
                <th>Address</th>
                <th>Phone</th>
                <th>Origin?</th>
                <th style="width: 80px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 24px;">
                  <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
                </td>
                <td>1st Lane Ave, NY, 10245</td>
                <td>+1(123)4567890</td>
                <td style="width: 24px;" class="text-center">
                  <input type="checkbox" checked disabled>
                </td>
                <td>
                  @include('shared/row_elipsis_menu', ['resource' => 'addresses', 'id' => 1])
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
    <div class="tab-pane" role="tabpanel" id="form"></div>
  </div>
</div>
@endsection
