<?php
  include 'conn.php';

  if (isset($_GET['clientId'])) {
    $clientId = $_GET['clientId'];

    $sql = "DELETE FROM client WHERE clientId = :clientId";

    $stmt = $con->prepare($sql);
    $delete = $stmt->execute(array(':clientId' => $clientId));

    if ($delete) {
      header('location: viewClient.php?deleted');
    }else {
      header('location: viewClient.php?not_deleted');
    }
  }
?>
