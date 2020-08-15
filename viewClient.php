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
          <h2 class="text-center">List Client</h2>
          <!-- Data Table for Ticket-->
          <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Username</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  include "conn.php";
                  $sql ="SELECT * FROM client";
                  $stmt = $con->query($sql);
                  $result = $stmt->fetchAll();
                  foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row['clientName']; ?></td>
                        <td><?php echo $row['clientAddress']; ?></td>
                        <td><?php echo $row['clientPhone']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                          <a href="deleteClient.php?clientId=<?php echo $row['clientId']; ?>" onclick="return confirm('Do You Want To Delete?')" class="btn btn-sm btn-danger">
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
