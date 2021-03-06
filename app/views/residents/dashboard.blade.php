@extends('layouts.app')
@section('breadcrumb')
<li class="active">
  Residentials
</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-9 col-md-8">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <canvas id="families_members_chart"></canvas>
      </div>
      <div class="col-lg-6 col-md-6"></div>
    </div>
  </div>
  <div class="col-lg-3 col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
          <li>
            <a href="/residentials/residents">
              <i class="glyphicon glyphicon-user"></i>
              Residents
            </a>
          </li>
          <li>
            <a href="/residentials/families">
              <i class="glyphicon glyphicon-tower"></i>
              Families
            </a>
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-transfer"></i>
              Immigration
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
