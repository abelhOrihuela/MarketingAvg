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
    <form class="pure-form pure-form-stacked">
      <fieldset>
        <legend>A Stacked Form</legend>

        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Email">

        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Password">

        <label for="state">State</label>
        <select id="state">
          <option>AL</option>
          <option>CA</option>
          <option>IL</option>
        </select>

        <label for="remember" class="pure-checkbox">
          <input id="remember" type="checkbox"> Remember me
        </label>

        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
      </fieldset>
    </form>
  </div>
</body>
</html>
