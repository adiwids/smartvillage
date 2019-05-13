@extends('layouts.application')
@section('breadcrumb')
<li>
  <a href="/users">Users</a>
</li>
<li class="active">john.doe</li>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-9 col-md-8">
    <div class="panel panel-default">
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
  <div class="col-lg-3 col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
          <li class="active">
            <a href="/users/1/edit">
              <i class="glyphicon glyphicon-pencil"></i>
              Edit
            </a>
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-user"></i>
              Resident Data
            </a>
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-list-alt"></i>
              Permissions
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
