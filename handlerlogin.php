<?php
  include 'conn.php';
  session_start();
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Check If Client Exist
    $sqlClient = "SELECT clientId,username, password FROM client WHERE username = :user AND password = :pass";
    $stmt = $con->prepare($sqlClient);
    $stmt->execute(
      array(
        ':user' => $username,
        ':pass' => $password
      )
    );
    $selectClient = $stmt->fetch(PDO::FETCH_ASSOC);
    // Client End

    // Check If Admin Exist
    $sqlAdmin = "SELECT id,username, password FROM Admin WHERE username = :user AND password = :pass";
    $stmt = $con->prepare($sqlAdmin);
    $selectAdmin = $stmt->execute(
      array(
        ':user' => $username,
        ':pass' => $password
      )
    );
    $selectAdmin = $stmt->fetch(PDO::FETCH_ASSOC);
    // Admin End

    if ($selectClient > 0) {
      $_SESSION['role'] = 'client';
      echo $_SESSION['id'] = $selectClient['clientId'];
      header('location: home.php?client');
    }elseif ($selectAdmin > 0) {
      $_SESSION['role'] = 'admin';
      echo $_SESSION['id'] = $selectAdmin['id'];
      header('location: home.php?admin');
    }else {
      header('location: index.php?error');
    }
  }
?>
