<?php
  include 'conn.php';

  if (isset($_POST['ticketId'])) {
    $ticketId = $_POST['ticketId'];
    $ticketName = $_POST['ticketName'];
    $ticketDate = $_POST['ticketDate'];
    $ticketStatus = $_POST['ticketStatus'];

    $sql = "UPDATE ticket SET
      ticketName =:ticketName,
      ticketDate =:ticketDate,
      ticketStatus =:ticketStatus

      WHERE ticketId = :ticketId";

    $stmt = $con->prepare($sql);
    $update = $stmt->execute(
      array(
        ':ticketName' => $ticketName,
        ':ticketDate' => $ticketDate,
        ':ticketStatus' => $ticketStatus,
        ':ticketId' => $ticketId
      )
    );

    if ($update) {
      header('location: viewTicket.php?updated');
    }else {
      header('location: viewTicket.php?not_updated');
    }
  }
?>
