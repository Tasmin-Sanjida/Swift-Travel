<?php
 session_start();

 $user_id=$_SESSION['u_id'];
 $category=$_GET['ins'];

 include 'database.php';

 if($category=='things'){
    $sql_user_ins="UPDATE insurance
    SET Things_price=500, things=1
    WHERE user_id='$user_id'";

    $conn->exec($sql_user_ins);


    $sql_user_amount="UPDATE user_profile
    SET user_balance=user_balance-500
    WHERE user_id='$user_id'";

    $conn->exec($sql_user_amount);

    
    header('location:tourist_spot.php');
 }

 elseif($category=='medical'){
    $sql_user_ins="UPDATE insurance
    SET health_price=800, Health=1
    WHERE user_id='$user_id'";
    
    $conn->exec($sql_user_ins);

    $sql_user_amount="UPDATE user_profile
    SET user_balance=user_balance-800
    WHERE user_id='$user_id'";

    $conn->exec($sql_user_amount);

    
    header('location:tourist_spot.php');
 }

 elseif($category=='cancel'){
    $sql_user_ins="UPDATE insurance
    SET trip_cancel_price=1000, trip_cancel=1
    WHERE user_id='$user_id'";
    
    $conn->exec($sql_user_ins);

    $sql_user_amount="UPDATE user_profile
    SET user_balance=user_balance-1000
    WHERE user_id='$user_id'";

    $conn->exec($sql_user_amount);
    
    header('location:tourist_spot.php');
 }



?>