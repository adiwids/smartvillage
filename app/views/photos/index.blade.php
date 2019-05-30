@extends('residents.edit')
@section('breadcrumb')
<li>
  <a href="/residentials">Residentials</a>
</li>
<li>
  <a href="/residentials/residents">Residents</a>
</li>
<li>
  <a href="/residentials/residents/1/edit">3271272879187287</a>
</li>
<li class="active">Photos</li>
@endsection
@section('tab-content')
<div class="panel-body">
  <ul class="nav nav-tabs" role="tablist">
    <li{{ $current_tab == 'list' ? ' class=active' : '' }}>
      <a href="/residents/1/photos" role="tab">
        <i class="glyphicon glyphicon-list"></i>
        List
      </a>
    </li>
    <li{{ $current_tab == 'form' ? ' class=active' : '' }}>
      <a href="/residents/1/photos/create" role="tab">
        <i class="glyphicon glyphicon-plus"></i>
        Photo
      </a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" role="tabpanel">
      <div class="panel panel-default panel-folder">
        @include(sprintf('photos/tabs/%s', $current_tab))
      </div>
    </div>
  </div>
</div>
@endsection
