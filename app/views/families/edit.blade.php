@extends('layouts.application')
@section('breadcrumb')
<li>
  <a href="/residentials">
    Residentials
  </a>
</li>
<li>
  <a href="/families">
    Families
  </a>
</li>
<li class="active">32712728791872879</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <form action="#">
        <div class="panel-body">
          @include('families/fields')
        </div>
        <div class="panel-footer">
          @include('shared/form_save_or_cancel_buttons')
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
