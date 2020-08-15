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
          <h2 class="text-center">List Tickets</h2>
          <!-- Data Table for Booking Ticket-->
          <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Ticket Name</th>
                      <th>Ticket Date</th>
                      <th>Ticket Status</th>
                      <th>Book</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  include "conn.php";
                  $sql ="SELECT * FROM ticket";
                  $stmt = $con->query($sql);
                  $result = $stmt->fetchAll();
                  foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row['ticketName']; ?></td>
                        <td><?php echo $row['ticketDate']; ?></td>
                        <td><?php echo $row['ticketStatus']; ?></td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bookModal<?php echo $row['ticketId']; ?>">
                            Book
                          </button>

                          <!-- Modal Edit-->
                          <div class="modal fade" id="bookModal<?php echo $row['ticketId']; ?>" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal Edit content-->
                              <div class="modal-content">
                                <form class="" action="saveBook.php" method="post">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Modal Header</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label>Time</label>
                                      <select class="form-control" name="booked_time" required>
                                        <option value="">Select Here</option>
                                        <option value="morning">Morning</option>
                                        <option value="noon">Afternoon</option>
                                        <option value="night">Night</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <input type="hidden" name="clientId" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="hidden" name="ticketId" value="<?php echo $row['ticketId']; ?>">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
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
