<?php
  include 'conn.php';

  if (isset($_POST['ticketName'])) {
    $ticketName = $_POST['ticketName'];
    $ticketDate = $_POST['ticketDate'];
    $ticketStatus = $_POST['ticketStatus'];

    $sql = "INSERT INTO ticket(ticketName, ticketDate, ticketStatus)
    VALUES (:name,:t_date,:t_status)";

    $stmt = $con->prepare($sql);
    $insert = $stmt->execute(
      array(
        ':name' => $ticketName,
        ':t_date' => $ticketDate,
        ':t_status' => $ticketStatus
      )
    );

    if ($insert) {
      header('location: viewTicket.php?saved');
    }else {
      header('location: viewTicket.php?not_saved');
    }
  }
?>
