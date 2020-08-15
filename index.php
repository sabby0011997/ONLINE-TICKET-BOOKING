<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Online Ticketing</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #d2d6de;">
    <div class="container-fluid">
      <div class="container" style="min-height: 500px; margin-top: 100px;">
        <div class="card" style="padding: 10px; width: 50%; margin: auto;">
          <form action="handlerlogin.php" method="post" style="padding: 5px;">
            <h3 class="text-center">Online Ticketing</h3>
            <div class="form-group">
              <label>Username</label>
              <input type="email" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
              <input type="reset" class="btn btn-danger" name="reset" value="Reset">
              <input type="submit" class="btn btn-success float-right" name="login" value="Login">
            </div>
            <div class="form-group">
              <a href="register.php" class="btn btn-primary btn-block">
                Register Here
              </a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>
