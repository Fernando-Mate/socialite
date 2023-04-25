<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Google Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-Gf4stnZOS9fZcTiTCkRvTc2XjK3KrUYoCjC61VVwngkt3qLdEEX5F5Lq3Xgjv5G5" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mb-4">Login with Google</h1>
      <form action="#">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Your email..">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Your password..">
        </div>
        <button type="submit" class="btn btn-primary">
          <span>Sign in with Google</span>
        </button>
        <a href="{{ route('google-auth') }}">google</a>
      </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-l+O6Ukda6QG8lOJ1xWdVxyX9ZHk+ed1HJvLPzKg/jyS6SgTV6UJjnxTQKW6q3Xc4s4kG/HfC4jF6RKRC6drS3w==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-qFsf1IBqxKj9+s2+kv+vl1yJSBKKyK8nxJH2tKj7wv5/5CiW7VY+yHbTp5f5GvE5" crossorigin="anonymous"></script>
  </body>
</html>
