@extends('layouts.application')
@section('breadcrumb')
<li>
  <a href="/residentials">Residentials</a>
</li>
<li>
  <a href="/residentials/residents">Residents</a>
</li>
<li class="active">3271272879187287</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <ul class="nav nav-tabs">
      @include("residents/tabs", ['tab' => $tab])
      <li class="dropdown pull-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="glyphicon glyphicon-print"></i>
          Print
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Biodata</a></li>
          <li><a href="#">ID Card Application Form (F-1.21)</a></li>
          <li><a href="#">Domicile</a></li>
          <li><a href="#">Police Records Application (SKCK)</a></li>
          <li><a href="#">Poor Annotation (SKTM)</a></li>
        </ul>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active">
        <div class="panel panel-default panel-folder">
          @yield('tab-content')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
