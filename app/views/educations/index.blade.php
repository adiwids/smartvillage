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
<li class="active">Education</li>
@endsection
@section('tab-content')
<div class="panel-body frame">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#list" role="tab" aria-controls="list" data-toggle="tab">
        <i class="glyphicon glyphicon-time"></i>
        History
      </a>
    </li>
    <li role="presentation">
      <a href="#form" role="tab" aria-controls="form" data-toggle="tab">
        <i class="glyphicon glyphicon-plus"></i>
        Record
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
                  <label for="check_all_educations">
                    <input type="checkbox" id="check_all_educations" data-toggle="checktablerows" data-target=".row-checkbox">
                  </label>
                </th>
                <th>Institution</th>
                <th>Degree</th>
                <th>Graduated At</th>
                <th style="width: 80px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 24px;">
                  <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
                </td>
                <td>Education University of Indonesia</td>
                <td>Strata I (S.Kom)</td>
                <td>2013</td>
                <td>
                  @include('shared/row_elipsis_menu', ['resource' => 'educations', 'id' => 1])
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
    <div class="tab-pane" role="tabpanel" id="form">
      <div class="panel panel-default panel-folder">
        <form action="#">
          <div class="panel-body">
            @include('educations/fields')
          </div>
          <div class="panel-footer">
            @include('shared/form_save_or_cancel_buttons')
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
