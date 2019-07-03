@extends('layouts.app')
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
<li>
  <a href="/residents/1/jobs">Jobs</a>
</li>
<li class="active">CEO</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="#">
          @include('jobs/fields')
        </form>
      </div>
      <div class="panel-footer">
        @include('shared/form_save_or_cancel_buttons')
      </div>
    </div>
  </div>
</div>
@endsection
