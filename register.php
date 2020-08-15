<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #d2d6de;">
    <div class="container-fluid">
      <div class="container" style="min-height: 500px; margin-top: 50px;">
        <div class="card" style="padding: 10px; width: 50%; margin: auto;">
          <form action="handlerRegister.php" method="post" style="padding: 5px;" onsubmit="return checkPass();">
            <h3 class="text-center">Online Ticketing Registration</h3>
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" name="clientName" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="clientAddress" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="clientPhone" required>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="email" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control" name="c_password" required>
            </div>

            <div class="form-group">
              <input type="reset" class="btn btn-danger" name="reset" value="Reset">
              <input type="submit" class="btn btn-success float-right" name="register" value="Register">
            </div>
            <script>
              function checkPass() {
                var pass1 = document.getElementsByName('password').value;
                var pass2 = document.getElementsByName('c_password').value;

                if (pass1 == pass2) {
                  return true;
                }else {
                  alert('Password dont Match');
                  return false;}

                              }
            </script>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
