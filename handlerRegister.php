<?php
  include 'conn.php';

  if (isset($_POST['register'])) {
    $clientName = $_POST['clientName'];
    $clientAddress = $_POST['clientAddress'];
    $clientPhone = $_POST['clientPhone'];
    $clientStatus = 'Active';
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO client values (?,?,?,?,?,?,?)";

    $stmt = $con->prepare($sql);
     $stmt->execute(array(null,$clientName,$clientAddress,$clientPhone,$clientStatus,$username,$password));
     $insert =$stmt->rowCount();

    if ($insert) {
      header('location: index.php?login');
    }else {
      header('location: register.php?try');
    }
  }
?>
