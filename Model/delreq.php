<?php
include 'conn.php';
$id=$_GET['id'];
$delete="delete from request where pid='$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:profile.php');

?>