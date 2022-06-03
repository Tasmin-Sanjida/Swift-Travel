<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Guide Booking</title>
</head>
<body>
    <?php
    
   session_start(); 
   $book_date=$_POST['booking_date'];
   
   $user_id=$_SESSION['u_id'];

   $g_id=$_GET['g'];


include 'database.php';
      
            //database code execute, default : warning generate
           $sql_user_info="UPDATE guide
           SET g_avail='0' , g_date='$book_date',user_id='$user_id'
           WHERE g_iid='$g_id'";
           
           $conn->exec($sql_user_info);
           header('location: book_confirm.html?booking=successful1')

?>
</body>
</html>