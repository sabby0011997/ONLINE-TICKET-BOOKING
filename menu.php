<div class="list-group">
  <?php
    $role = $_SESSION['role'];
    if ($role == 'admin') { ?>
      <a href="viewTicket.php" class="list-group-item list-group-item-action">View Ticket</a>
      <a href="viewClient.php" class="list-group-item list-group-item-action">View Client</a>
      <?php
    }elseif ($role == 'client') {
      ?>
      <a href="bookTicket.php" class="list-group-item list-group-item-action">Book Ticket</a>
      <a href="my_ticket.php" class="list-group-item list-group-item-action">My Tickets</a>
      <?php
    }
  ?>
  <a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
</div>
