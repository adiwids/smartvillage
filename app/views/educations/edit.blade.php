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
  <a href="/residents/1/education">Education</a>
</li>
<li class="active">Strata I (S.Kom)</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <form action="#">
        <div class="panel-body">
          @include('educations.fields')
        </div>
        <div class="panel-footer">
          @include('shared/form_save_or_cancel_buttons')
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
