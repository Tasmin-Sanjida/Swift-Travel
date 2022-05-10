<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
   
         
         //storing value to variables
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        
       
    
        // encoding password
        $hidden_pass=md5($pass);
         
        ///tries to communicate with the database and store the data
        
            include 'database.php';
      
            //database code execute, default : warning generate
           $sql_user_info="INSERT INTO user_profile(user_name,user_mail,password) VALUES('$name','$mail','$hidden_pass')";

            ///executing the mysql code
            // we used exec() as the database is not returning anything
           $conn->exec($sql_user_info);

           $u_id="SELECT user_id
           FROM `user_profile` 
           WHERE user_mail='$mail'";

           $returnobj=$conn->query($u_id);
          $user_info=$returnobj->fetchAll();

                //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($user_info as $user)
                {
                    $us_id=$user['user_id'];

                };
                
                $sql_ins_info="INSERT INTO insurance(user_id,Health, things, trip_cancel)
                VALUES('$us_id','0','0','0')";
                $conn->exec($sql_ins_info);
    
               header('location: tourist_spot.php?signup=successful');

     }

else{
    //we won't provide service
    
    header('location: sign_up.html?signup=Failed');
}
