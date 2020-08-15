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
          <!-- Data Table for Ticket-->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#myModal">Add Ticket</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <form action="saveTicket.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                              <label>Ticket Name</label>
                              <input type="text" class="form-control" name="ticketName" required>
                            </div>
                            <div class="form-group">
                              <label>Ticket Date</label>
                              <input type="date" class="form-control" name="ticketDate" required>
                            </div>
                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="ticketStatus" required>
                                <option value="">Select Status</option>
                                <option value="Active">Active</option>
                                <option value="deactive">Deactive</option>
                              </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-success" name="submit" value="Save Ticket">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Ticket Date</th>
                      <th>Ticket Status</th>
                      <th>Action</th>
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
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['ticketId']; ?>">
                            Edit Ticket
                          </button>

                          <!-- Modal Edit-->
                          <div class="modal fade" id="myModal<?php echo $row['ticketId']; ?>" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal Edit content-->
                              <div class="modal-content">
                                <form class="" action="editTicket.php" method="post">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Modal Header</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label>Ticket Name</label>
                                      <input type="text" class="form-control" name="ticketName" value="<?php echo $row['ticketName']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Ticket Date</label>
                                      <input type="date" class="form-control" name="ticketDate" value="<?php echo $row['ticketDate']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Status</label>
                                      <select class="form-control" name="ticketStatus" required>
                                        <option value="<?php echo $row['ticketStatus']; ?>"><?php echo $row['ticketStatus']; ?></option>
                                        <option value="Active">Active</option>
                                        <option value="deactive">Deactive</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <input type="hidden" name="ticketId" value="<?php echo $row['ticketId']; ?>">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <a href="deleteTicket.php?ticketId=<?php echo $row['ticketId']; ?>" onclick="return confirm('Do You Want To Delete?')" class="btn btn-sm btn-danger">
                            Delete
                          </a>
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
