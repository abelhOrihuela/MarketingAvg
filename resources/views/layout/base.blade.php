<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
  <title>Analisis de sueldos WTC</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>




  <script src="{{ asset('js/jquery-1.12.1.min.js')}}" charset="utf-8"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">


  </script>
  <!--[if lte IE 8]>

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="../css/blog.css">
  <!--<![endif]-->

</head>
<body>
  <div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
      <div class="header">

        <h1 class="brand-title">World talent consulting</h1>
        <h2 class="brand-tagline">Marketing Average</h2>

        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="pure-button" href="{{ route('auth_destroy_path') }}">Logout</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="content pure-u-1 pure-u-md-3-4">
      <img src="../img/logo.png" alt="" class="img-header-view" />
      <div class="pure-menu pure-menu-horizontal">
        <a href="{{ route('company_dashboard_path') }}" class="pure-menu-heading pure-menu-link">Home</a>
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="{{ route('company_new_path') }}" class="pure-menu-link">New Company</a></li>
          <li class="pure-menu-item"><a href="{{ route('profile_new_path') }}" class="pure-menu-link">New Profile</a></li>
          <li class="pure-menu-item"><a href="{{ route('position_store_path') }}" class="pure-menu-link">New Position</a></li>
          <li class="pure-menu-item"><a href="{{ route('company_showall_path') }}" class="pure-menu-link">Resume</a></li>
        </ul>
      </div>
      <h3 class="company-name">{{ session('companyName')  }}</h3>
      <div class=" container_main">


      @yield('content')

      </div>
    </div>
  </div>

</body>
</html>
