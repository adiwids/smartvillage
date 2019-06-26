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
<li class="active">Jobs</li>
@endsection
@section('tab-content')
<div class="panel-body frame">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#list" role="tab" aria-controls="list" data-toggle="tab">
        <i class="glyphicon glyphicon-time"></i>
        Experiences
      </a>
    </li>
    <li role="presentation">
      <a href="#form" role="tab" aria-controls="form" data-toggle="tab">
        <i class="glyphicon glyphicon-plus"></i>
        Job
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
                  <label for="check_all_jobs">
                    <input type="checkbox" id="check_all_jobs" data-toggle="checktablerows" data-target=".row-checkbox">
                  </label>
                </th>
                <th>Employer</th>
                <th>Position</th>
                <th>Work Period</th>
                <th style="width: 80px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 24px;">
                  <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
                </td>
                <td>Microsoft Ltd.</td>
                <td>CEO</td>
                <td>2011 - now</td>
                <td>
                  @include('shared/row_elipsis_menu', ['resource' => 'jobs', 'id' => 1])
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
              @include('jobs/fields')
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
