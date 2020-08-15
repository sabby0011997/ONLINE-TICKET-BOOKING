<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'link.php'; ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-12" style="background-color: purple; min-height: 100px;">
          <h1 align="center"><i>ONLINE TICKET BOOKING</i></h1>
        </div>
        <div class="col-sm-2" style="padding: 5px; background-color: purple;">
          <?php include 'menu.php'; ?>
        </div>

        <div class="col-sm-10" style="min-height: 500px;">
          <h3>Welcome <?php echo $_SESSION['role']; ?></h3>
        </div>
      </div>
    </div>
    <footer class="container-fluid">
      <p>Footer Text</p>
    </footer>

  </body>
</html>
