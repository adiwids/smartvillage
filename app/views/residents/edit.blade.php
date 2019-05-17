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
