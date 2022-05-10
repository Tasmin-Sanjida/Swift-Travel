<?php

session_start();

$amount=$_POST['amount'];
$user_id=$_SESSION['u_id'];
include 'database.php';

$sql_user_amount="UPDATE user_profile SET user_balance=user_balance+'$amount' WHERE user_id='$user_id'";
$conn->exec($sql_user_amount);

header('location:tourist_spot.php');

?>