<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>


<style>
     .body{
     font-family: Arial, Helvetica, sans-serif;
     font-family: Comic Sans MS;
   }
    .logo_name img{
      height: 70px;
      width: 75px
    }
    .logo_name .name{
      font-style: italic;
      font-size: 45px;
      font-weight: bold;

    }
    .header .logo_name{
      display: flex;
      flex-direction: row;
      align-items: center;
      flex-grow: 2;
    }
    .header{
      display: flex;
      flex-direction: row;
      /* padding-left: 50px;
      padding-right: 50px; */
      padding: 1vw;
      padding-bottom: 0%;
    } 
    
    .header .btn{
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    #btn_type1{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn_type2{
      background-color: black;
      color: white;
      border-radius: 20px;
      font-family: Comic Sans MS;
    }

    #btn_type1:hover{
     background-color: rgb(194, 189, 189);
     color: black;
     transition: .5s;
     cursor: pointer;
     border-radius: 20px;
    }
    .up_title{
        text-align: center;
        font-size: 30px;
        font-family: Comic Sans MS;
        padding-bottom: 00.5vh;
    }
*{
 margin: 0px;
 padding: 0px;
}

.main{

  margin: 2%;
 display: grid;
 grid-template-columns: repeat(3, 1fr);
 grid-auto-rows: auto;
 grid-gap: 1rem;
 width: 100%;
}

.card{
     width: 100%;
     display: inline-block;
     /* box-shadow: 2px 2px 20px black; */
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
  font-family: Comic Sans MS;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 10px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
  font-family:Comic Sans MS;;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

#btn1, #btn_type_name{
    background-color: white;
    color: black;
    border: black;

}
</style>
<body>
    <header class="header">
        <div class="logo_name">
            <img src="./image/st_logo.jpg" height="70px" width="40px">
            <h2 class="name">Swift Travel</h2>
        </div>

        <a href="index.html"><div class="btn" >
            <div class="ui animated button" id="btn_type1" tabindex="0">
                <div class="visible content">Home</div>
                <div class="hidden content">
                  <i class="home icon"></i>
                </div>
              </div></a>

              <?php
                      echo"
                      <div class='ui animated fade button tabindex='0' id='btn_type_name'>
                      <div class='visible content'><i class='user icon'></i>$_SESSION[u_name]</div>
                        <div class='hidden content'>
                        <i class='user icon'></i>
                        </div>
                       </div>
                      ";
              ?>
             <a href="logout.php"> <div class="ui animated fade button" tabindex="0" id="btn_type2">
                <div class="visible content">Log Out</div>
                <div class="hidden content">
                  <i class="handshake outline icon"></i>
                </div>
              </div></a>
        </div>
    </header>


    <div class="up_title">
               <p>WELCOME<br><u>Book you Desire room</u></p>
            </div>
    <main class="main">
            
            <?php
            $id=$_GET['id'];
            include 'database.php';
            $sql_des_id="SELECT *
                        FROM room_booking
                        WHERE Tourist_Spotd_id='$id'";
           
                $returnobj=$conn->query($sql_des_id);
                $room_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($room_info as $room)
                {   
                    $ed=$room['end_date'];

                    $varr="UPDATE room_booking
                    SET availability='1', start_date='0000-00-00' , end_date='0000-00-00', user_id=1
                    WHERE CURRENT_DATE()<$ed";

                    $conn->exec($varr);
                    
                    if($room['availability']=='1'){
                      echo "
                      <div class='room_details'>
                    <div class='card'>
    
                        <div class='image'>
                           <img src='$room[room_pic]'>
                        </div>
                        <div class='title'>
                         <h1>$room[h_name]</h1>
                        </div>
                        <div class='des'>
                         <p>Room No : $room[room_id] <br>Price: $room[price]</p>
                        <a href='room_booking_form.php?r_id=$room[room_id] && h_id=$room[h_id] && h_name=$room[h_name]'><button>Book</button></a>
                        </div>
                    </div> 
                </div>
                            
                 
                  ";
                    }


                    else{
                      echo "
                  <div class='room_details'>
                <div class='card'>

                    <div class='image'>
                       <img src='$room[room_pic]'>
                    </div>
                    <div class='title'>
                     <h1>$room[h_name]</h1>
                    </div>
                    <div class='des'>
                     <p>Room No : $room[room_id] <br>Price: $room[price]</p>
                     <a href='room_booking_form.php?r_id=$room[room_id] && h_id=$room[h_id] && h_name=$room[h_name]'><button disabled>Book</button></a>
                    </div>
                </div> 
            </div>
                        
             
              ";
                    }
                  

                
                }
     

    ?>


        </main>
        <script>

            document.getElementById("btn_type1").onclick = function () {
                location.href = "index.html";
        };
        document.getElementById("btn_type2").onclick = function () {
           location.href = "sign_up.html";
        };   
       </script>    
</body>
</html>