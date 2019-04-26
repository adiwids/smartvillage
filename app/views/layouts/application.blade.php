<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Smart Vilage | 1.0-alpha</title>
  <link rel="stylesheet" href="{{ asset_path('application.css') }}">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="has-icon">
            <i class="glyphicon glyphicon-home"></i>
            Home
          </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle has-icon" data-toggle="dropdown">
            John Doe
            <i class="caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#" class="has-icon">
                <i class="glyphicon glyphicon-info-sign"></i>
                About
              </a>
            </li>
            <li>
              <a href="#" class="has-icon">
                <i class="glyphicon glyphicon-earphone"></i>
                Get Support
              </a>
            </li>
            <li class="divider" role="separator"></li>
            <li>
              <a href="#" class="has-icon">
                <i class="glyphicon glyphicon-cog"></i>
                Preferrences
              </a>
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
  </nav>
  <div class="container-fluid" role="main-content">
    @yield('content')
  </div>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <p class="bg-info text-muted text-right">
          Page rendered in <strong>0</strong> seconds.
          @if($_ENV['CI_ENV'] === 'development')
          CodeIgniter Version <strong>{{ CI_VERSION }}</strong>
          @endif
        </p>
      </div>
    </div>
  </footer>
  <script src="{{ asset_path('application.js') }}"></script>
</body>
</html>
