<?php
include 'db_connect.php';

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];
$sql = "INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`) VALUES ( '$msg', '$room', '$ip', current_timestamp()); ";
$r=mysqli_query($conn, $sql);
if(!$r)
echo 'err';
mysqli_close($conn);

?>