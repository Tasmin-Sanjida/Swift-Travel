<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Room Booking</title>
</head>
<body>
    <?php
    
   session_start(); 
   $st_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   
   $user_id=$_SESSION['u_id'];


   $hotel_id=$_GET['h'];
   $r_id=$_GET['r'];


include 'database.php';
      
            //database code execute, default : warning generate
           $sql_user_info="UPDATE room_booking
           SET availability=0 ,start_date='$st_date',end_date='$end_date',user_id='$user_id'
           WHERE room_id='$r_id' AND h_id='$hotel_id'";
           
           $conn->exec($sql_user_info);
           header('location: book_confirm.html?booking=successful1')

?>
</body>
</html>