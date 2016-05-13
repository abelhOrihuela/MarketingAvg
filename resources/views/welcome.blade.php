<!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

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
  <link rel="stylesheet" href="css/blog.css">
  <!--<![endif]-->
</head>
<body>
  <div class="container">
    <section class="container-row">
      <form class="pure-form pure-form-stacked" action="{{ route('auth_store_path') }} " method="post">
        <fieldset>
          <legend><img src="img/logo.png" alt="" /></legend>

          <label for="email">Username</label>
          <input id="email" type="text" placeholder="Email" name="email" class="pure-input-1-2">

          <label for="password">Password</label>
          <input id="password" type="password" placeholder="Password" name="password" class="pure-input-1-2">

          <label for="state">Company</label>
          <select id="state" name="company" class="pure-input-1-2">
            @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->id }} : {{ $company->comp_name }}</option>
            @endforeach
          </select>

          <label for="remember" class="pure-checkbox">
            <input id="remember" type="checkbox"> Remember me
          </label>
          {{ csrf_field() }}
          <button type="submit" class="pure-button pure-button-primary">Sign in</button>
        </fieldset>
      </form>

    </section>


  </div>
</body>
</html>
