<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Smart Village</title>
  <link rel="stylesheet" href="{{ asset_path('app.css') }}">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="/" class="navbar-brand">Smart Village</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown{{ is_page(uri_string(), 'settings') ? ' active' : '' }}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-cog"></i>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="/settings">
                <i class="glyphicon glyphicon-pencil"></i>
                General Settings
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li {{ empty(uri_string()) ? "class=active" : "" }}>
          <a href="/" class="has-icon">
            <i class="glyphicon glyphicon-home"></i>
          </a>
        </li>
        <li {{ is_page(uri_string(), 'about') ? "class=active" : "" }}>
          <a href="/about" class="has-icon">
            <i class="glyphicon glyphicon-info-sign"></i>
          </a>
        </li>
        <li {{ is_page(uri_string(), 'help') ? "class=active" : "" }}>
          <a href="/help" class="has-icon">
            <i class="glyphicon glyphicon-question-sign"></i>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle has-icon" data-toggle="dropdown">
            john.doe
            <i class="caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="/users/1/edit" class="has-icon">Edit Profile</a>
            </li>
            <li class="divider" role="separator"></li>
            <li>
              <a href="#" class="has-icon">
                <i class="glyphicon glyphicon-off text-danger"></i>
                Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <ul class="nav navbar-nav sidebar">
      <li {{ is_page(uri_string(), ['residentials', 'residents', 'families']) ? "class=active" : "" }}>
        <a href="/residentials">
          <i class="glyphicon glyphicon-user"></i>
          Residentials
        </a>
      </li>
      <li {{ is_page(uri_string(), 'archives') ? "class=active" : "" }}>
        <a href="/archives">
          <i class="glyphicon glyphicon-folder-open"></i>
          Archives
        </a>
      </li>
      <li {{ is_page(uri_string(), 'transactions') ? "class=active" : "" }}>
        <a href="/transactions">
          <i class="glyphicon glyphicon-piggy-bank"></i>
          Cash Transactions
        </a>
      </li>
      <li class="divider" role="separator"></li>
      <li {{ is_page(uri_string(), 'users') ? "class=active" : "" }}>
        <a href="/users">
          <i class="glyphicon glyphicon-sunglasses"></i>
          Users
        </a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid" role="main-content">
    <div class="row">
      <ol class="breadcrumb">
        <li {{ empty(uri_string()) ? "class=active" : "" }}>

          @if(!empty(uri_string()))
          <a href="/">
            <i class="glyphicon glyphicon-home"></i>
            Home
          </a>
          @else
            <i class="glyphicon glyphicon-home"></i>
            Home
          @endif

        </li>
        @yield('breadcrumb')
      </ol>
    </div>
    @yield('content')
  </div>
  <script src="{{ asset_path('app.js') }}"></script>
  <script src="{{ asset_path('bootstrap-datetimepicker.min.js') }}"></script>
</body>
</html>
