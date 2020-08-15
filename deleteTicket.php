<?php
  include 'conn.php';

  if (isset($_GET['ticketId'])) {
    $ticketId = $_GET['ticketId'];

    $sql = "DELETE FROM ticket WHERE ticketId = :ticketId";

    $stmt = $con->prepare($sql);
    $delete = $stmt->execute(array(':ticketId' => $ticketId));

    if ($delete) {
      header('location: viewTicket.php?deleted');
    }else {
      header('location: viewTicket.php?not_deleted');
    }
  }
?>
