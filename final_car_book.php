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
   $book_date=$_POST['booking_date'];
   
   $user_id=$_SESSION['u_id'];

   $c_id=$_GET['c'];


include 'database.php';
      
            //database code execute, default : warning generate
           $sql_user_info="UPDATE rental_car
           SET c_avail='0' , booking_date='$book_date',user_id='$user_id'
           WHERE car_id='$c_id'";
           
           $conn->exec($sql_user_info);
           header('location: book_confirm.html?booking=successful1')

?>
</body>
</html>