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
          <h2 class="text-center">List Of My Booking</h2>
          <!-- Data Table for Ticket-->
          <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Ticket Name</th>
                      <th>Ticket Date</th>
                      <th>Ticket Time</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  include "conn.php";
                  $id = $_SESSION['id'];
                  $sql ="SELECT * FROM ticket inner join booking using(ticketId) inner join
                  client using(clientId) where clientId= '$id'";
                  $stmt = $con->query($sql);
                  $result = $stmt->fetchAll();
                  foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row['ticketName']; ?></td>
                        <td><?php echo $row['ticketDate']; ?></td>
                        <td><?php echo $row['booked_time']; ?></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm" name="button">
                            <?php echo $row['bookStatus']; ?>
                          </button>
                        </td>
                    </tr>
                    <?php
                  }
                 ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
    <footer class="container-fluid">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
