<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location: index.php');
} ?>
<title>Online Ticketing</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- DataTable -->
<script src="datatable/js/jquery-3.5.1.js"></script>
<script src="datatable/js/jquery.dataTables.min.js"></script>
<script src="datatable/js/dataTables.bootstrap4.min.js"></script>
<style>
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }
</style>
<script>
$(document).ready(function() {
  $('#example').DataTable();
} );
</script>
