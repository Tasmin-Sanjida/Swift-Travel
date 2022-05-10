<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <!-- <link rel="stylesheet" href="w3.css"> -->
</head>

<style>
     .body{
     font-family: Arial, Helvetica, sans-serif;
     display: flex;
     flex-direction: column;
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
    } 
    
    .header .btn{
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    #btn1, #btn_type_name , #btn_packing_tips{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }
    #btn2{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn9{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }
    
    #btn3{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn_car{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn_car2{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn_ticket{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn_ticket2{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }

    #btn4{
      background-color: white;
      border-radius: 20px;
      color: black;
      font-family: Comic Sans MS;
    }
    #btn5{
      background-color: black;
      color: white;
      border-radius: 20px;
      font-family: Comic Sans MS;
    }

    #btn1:hover, #btn_packing_tips:hover, #btn_ticket:hover, #btn_ticket2:hover, #btn_car2:hover, #btn_car:hover{
     background-color: rgb(194, 189, 189);
     color: black;
     transition: .5s;
     cursor: pointer;
     border-radius: 20px;
    }
    #btn2:hover{
     background-color: rgb(194, 189, 189);
     color: black;
     transition: .5s;
     cursor: pointer;
     border-radius: 20px;
    }
    #btn3:hover{
     background-color: rgb(194, 189, 189);
     color: black;
     transition: .5s;
     cursor: pointer;
     border-radius: 20px;
    }

    a{
      color: black;
    }
    
    .main {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    /* background: rgb(25,12,41); */
}


.main .description{
  display: flex;
  align-items: center;
  text-align: center;
  padding: 1vw;
  font-size: 20px;
  font-style: italic;
}

.picture img{
  height: 400px;
  width: 450px;

}

</style>

<body>
<header class="header">
                    <div class="logo_name">
                        <img src="./image/st_logo.jpg" height="70px" width="40px">
                        <h2 class="name">Swift Travel</h2>
                    </div>
                    
            
                    <div class="btn" >
                        <div class="ui animated button" tabindex="0" id="btn1">
                            <div class="visible content">Home</div>
                            <div class="hidden content">
                              <i class="home icon"></i>
                            </div>
                        </div>

                        <a href="packing_tips.html"><div class="ui animated button" tabindex="0" id="btn_packing_tips">
                            <div class="visible content">Packing Tips</div>
                            <div class="hidden content">
                               <i class="shopping bag icon"></i>
                            </div>
                        </div></a>
                        
                            <?php

                          $des=$_POST['search_input'];
                          
                          include 'database.php';
                         
                          $sql_des="SELECT * From tourist_spot WHERE  d_name LIKE '%$des%'";
                          $returnobj=$conn->query($sql_des);
                              $des_info=$returnobj->fetchAll();
            
                              foreach ($des_info as $destination)
                              {
                                  $dess_id=$destination['d_id'];
                              }    
                              if (!empty($_SESSION['u_id'])) {
                                
                              echo"
                             
                              <a href='room_booking.php?id=$dess_id'>
                              <div class='ui animated fade button' tabindex='0' id='btn2' >
                                <div class='visible content'>Room Booking</div>
                                <div class='hidden content'>
                                  <i class='warehouse icon'></i>
                              </div>
                              </div></a>
    
                              <a href='rental_car.php?id=$dess_id'>
                              <div class='ui animated fade button' tabindex='0' id='btn_car' >
                                <div class='visible content'>Rental Car</div>
                                <div class='hidden content'>
                                  <i class='car icon'></i>
                                </div>  
                              </div></a>
    
                              <a href='ticket_booking.php?id=$dess_id'>
                              <div class='ui animated fade button' tabindex='0' id='btn_ticket' >
                                <div class='visible content'>Ticket Booking</div>
                                <div class='hidden content'>
                                  <i class='fighter jet icon'></i>
                                  </div>
                              </div></a>

                              <a href='guide.php?id=$dess_id'>
                          <div class='ui animated fade button' tabindex='0' id='btn_ticket' >
                            <div class='visible content'>Guide</div>
                            <div class='hidden content'>
                            <i class='user secret icon'></i>
                              </div>
                          </div></a>

                              <div class='ui animated fade button tabindex='0' id='btn_type_name'>
                              <div class='visible content'><i class='user icon'></i>$_SESSION[u_name]</div>
                                <div class='hidden content'>
                                <i class='user icon'></i>
                                </div>
                               </div>
                      
                              <a href='logout.php'><div class='ui animated fade button' tabindex='0' id='btn5' onclick='location.href='sign_up.html''>
                                <div class='visible content'>Log Out</div>
                                <div class='hidden content'>
                                  <i class='handshake outline icon'></i>
                                </div>
                              </div></a>
                              ";
                            }                   
                            else{
                              echo"
                              <a href='sign_up.html'>
                              <div class='ui animated fade button' tabindex='0' id='btn2' >
                                <div class='visible content'>Room Booking</div>
                                <div class='hidden content'>
                                  <i class='warehouse icon'></i>
                              </div></a>
                              </div>
    
                              <a href='sign_up.html'>
                              <div class='ui animated fade button' tabindex='0' id='btn_car' >
                                <div class='visible content'>Rental Car</div>
                                <div class='hidden content'>
                                  <i class='car icon'></i>
                                </div>  
                              </div></a>
    
                              <a href='sign_up.html'>
                              <div class='ui animated fade button' tabindex='0' id='btn_ticket' >
                                <div class='visible content'>Ticket Booking</div>
                                <div class='hidden content'>
                                  <i class='fighter jet icon'></i>
                                  </div>
                              </div></a>

                              <a href='sign_up.html'>
                          <div class='ui animated fade button' tabindex='0' id='btn_ticket' >
                            <div class='visible content'>Guide</div>
                            <div class='hidden content'>
                            <i class='user secret icon'></i>
                              </div>
                          </div></a>
    
                              <a href='sign_up.html'><div class='ui animated fade button' tabindex='0' id='btn5' onclick='location.href='sign_up.html''>
                                <div class='visible content'>Sign-up / Log in</div>
                                <div class='hidden content'>
                                  <i class='handshake outline icon'></i>
                                </div>
                              </div></a>
                              ";
    
                               }
                                       
                        
              
                          ?>
                          
                         
                    </div>
                    
                </header>
        <?php
            $des=$_POST['search_input'];
            include 'database.php';
            $sql_des="SELECT * From tourist_spot WHERE  d_name LIKE '%$des%'";
            $returnobj=$conn->query($sql_des);
                $des_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($des_info as $destination)
                {
                    $dess_id=$destination['d_id'];
                    echo "
                
                <main class='main'>
                    <div class='picture'>
                      <img src='$destination[pic]'>
                    </div>
                    <div class='description'>
                    $destination[description]
                    </div>
                    <div class='btn' >
                         
                          <div class='ui animated fade button' tabindex='0' id='btn3'> 
                          <div class='visible content'><a href='places_to_visit.php?destination=$dess_id'>Places to visit....</a></div>
                          <div class='hidden content'>
                                
                                <a href='places_to_visit.php?destination=$dess_id'><i class='map marker alternate icon'></i></a>
                            </div>
                          </div>
                          <div class='ui animated fade button' tabindex='0' id='btn4'>
                            <div class='visible content'><a href='things_to_do.php?destination=$dess_id'>Things to Do...</a></div>
                            <div class='hidden content'>
                               <a href='things_to_do.php?destination=$dess_id'><i class='paper plane outline icon'></i></a>  
                            </div>
                          </div>
                    </div>
                </main>";
                }

    ?>
    <script>
        
        document.getElementById("btn1").onclick = function () {
            location.href = "index.html";
        };
        document.getElementById("btn2").onclick = function () {
            location.href = "room_booking.html";
        };

        document.getElementById("btn9").onclick = function () {
            location.href = "sign_up.html";
        };
        
        document.getElementById("btn3").onclick = function () {
            location.href = "place_to_visit.html";
        };
        document.getElementById("btn4").onclick = function () {
            
            location.href = "things_to_do.html";
        };

        document.getElementById("btn5").onclick = function () {
            location.href = "sign_up.html";
            console.log(123456789)
        };
        
    </script>
</body>
</html>