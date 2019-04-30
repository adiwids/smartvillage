@extends('layouts.application')
@section('breadcrumb')
<li class="active">Users</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12">
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
          User
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="list" role="tabpanel">
        <div class="panel panel-default panel-folder">
          <div class="panel-body">

          </div>
        </div>
      </div>
      <div class="tab-pane" id="form" role="tabpanel">
        <div class="panel panel-default panel-folder">
          <form action="#">
            <div class="panel-body">
              @include('users.fields')
            </div>
            <div class="panel-footer">
              <button class="btn btn-primary">
                <i class="glyphicon glyphicon-floppy-disk"></i>
                Save
              </button>
              <span>or</span>
              <button class="btn btn-default">
                <i class="glyphicon glyphicon-close"></i>
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
