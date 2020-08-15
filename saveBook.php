<?php
  include 'conn.php';

  if (isset($_POST['ticketId'])) {
    $clientId = $_POST['clientId'];
    $ticketId = $_POST['ticketId'];
    $booked_time = $_POST['booked_time'];
    $bookStatus = 'pending';

    $sql = "INSERT INTO booking (ticketId, clientId, booked_time, bookStatus)
    VALUES (:b_id, :b_cid, :b_time, :b_status)";

    $stmt = $con->prepare($sql);
    $insert = $stmt->execute(
      array(
        ':b_id' => $ticketId,
        ':b_cid' => $clientId,
        ':b_time' => $booked_time,
        ':b_status' => $bookStatus
      )
    );

    if ($insert) {
      header('location: my_ticket.php?saved');
    }else {
      header('location: bookTicket.php?not_saved');
    }
  }
?>
