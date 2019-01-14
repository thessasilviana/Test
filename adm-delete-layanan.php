<?php
session_start();
include 'connect.php';

if(isset($_GET['id'])) {
    $qq = mysqli_query($con,"SELECT * FROM login WHERE id = " . $_GET['id']);
    $ss = mysqli_fetch_assoc($qq);
    $apus = mysqli_query($con, "DELETE FROM login WHERE id = " . $_GET['id']);
    header("Location:manage-layanan-kami.php");
}
?>