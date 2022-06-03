<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Designer</title>
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
    .main{

        margin: 2%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: auto;
        grid-gap: 1rem;
        width: 100%;
        }

    .card{
     width: 80%;
     display: inline-block;
     border-radius: 5px; 
     margin: 2%;
     padding: 5%;
     box-shadow: 2px 2px 10px black;
     text-align: center;
    }

.image img{
  width: 100%;
  height: 250px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
 }

 .up_title{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10%;
        text-align: center;
        font-size: 30px;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        padding-bottom: 00.5vh;
 }

 #one{
  margin-top: 5%;
 }

</style>  

<body>
<header class="header">
        <div class="logo_name">
            <img src="./image/st_logo.jpg" height="70px" width="40px">
            <h2 class="name">Swift Travel</h2>
        </div>

        <div class="btn" >
           <a href="index.html"> <div class="ui animated button" tabindex="0" id="btn_type1">
                <div class="visible content">Home</div>
                <div class="hidden content">
                  <i class="home icon"></i>
                </div>
              </div></a>

              <a href="sign_up.html">
              <div class="ui animated fade button" tabindex="0" id="btn_type2">
                <div class="visible content">Sign-up / Log in</div>
                <div class="hidden content">
                  <i class="handshake outline icon"></i>
                </div>
              </div></a>
        </div>
</header>

<div class="up_title" id="one">Choose any of these Rooms</div>



<main class="main">

<?php

$des=$_POST['category'];
$b=$_POST['category2'];
$d=$_POST['Date'];


include 'database.php';


// -------------------------------------------------------------------------


$sql_des="SELECT *
FROM tourist_spot as t
     JOIN
     room_booking AS r
     ON r.Tourist_Spotd_id=t.d_id
     WHERE t.d_name LIKE '%$des%'  AND r.price<='$b'
     AND r.availability='1'
            ";
$returnobj=$conn->query($sql_des);
$room_info=$returnobj->fetchAll();

foreach ($room_info as $room)
                 {   
   
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
                  }

 ?>                 

</main>

<!-- ---------------------------------------------- -->
<div class="up_title">Select any Ticket</div>
<main class="main">
<?php

$sql_tic="SELECT *
FROM tourist_spot as t
     JOIN
     ticket_bboking AS tic
     ON tic.d_id=t.d_id
     WHERE t.d_name LIKE '%$des%'  AND tic.t_price<='$b'
     AND tic.t_avail='1'
    ";
$returnobj=$conn->query($sql_tic);
$ticket_info=$returnobj->fetchAll();

foreach ($ticket_info as $ticket)
                {   

                    if($ticket['t_avail']==1){
                      if($ticket['t_price']==1000){
                        echo "
                        <div class='ticket_details'>
                        <div class='card'>
      
                          <div class='image'>
                             <img src='./image/bus.jpg'>
                          </div>
                          <div class='title'>
                           <h1>$ticket[t_id]</h1>
                          </div>
                          <div class='des'>
                           <p>Time: $ticket[time]  <br>Price: $ticket[t_price]</p>
                           <a href='ticket_booking_form.php?t_id=$ticket[t_id]'><button>Book</button></a>
                          </div>
                        </div> 
                        </div>                                         
                    ";
                      }
                      
                      elseif($ticket['t_price']==600){
                        echo "
                        <div class='ticket_details'>
                        <div class='card'>
      
                          <div class='image'>
                             <img src='./image/train.jpg'>
                          </div>
                          <div class='title'>
                           <h1>$ticket[t_id]</h1>
                          </div>
                          <div class='des'>
                          <p>Time: $ticket[time]  <br>Price: $ticket[t_price]</p>
                           <a href='ticket_booking_form.php?t_id=$ticket[t_id]'><button>Book</button></a>
                          </div>
                        </div> 
                        </div>                                           
                    ";
                      }

                      else{
                        echo "
                        <div class='ticket_details'>
                        <div class='card'>
      
                          <div class='image'>
                             <img src='./image/plane.jpg'>
                          </div>
                          <div class='title'>
                           <h1>$ticket[t_id]</h1>
                          </div>
                          <div class='des'>
                          <p>Time: $ticket[time]  <br>Price: $ticket[t_price]</p>
                           <a href='ticket_booking_form.php?t_id=$ticket[t_id]'><button>Book</button></a>
                          </div>
                        </div> 
                        </div>                                           
                    ";
                      }
                    }
                    }
?>
</main>
<!-- // ---------------------------------------------------------------- -->

<div class="up_title">Rent any Car</div>
<main class="main">
<?php

   $sql_car="SELECT *
   FROM
   tourist_spot as t
   JOIN
   rental_car AS c 
   ON c.d_id=t.d_id
   WHERE t.d_name LIKE '%$des%'  AND c.rent<='$b'
   AND c.c_avail='1'";    
   
   $returnobj=$conn->query($sql_car);
   $car_info=$returnobj->fetchAll();

  //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
   foreach ($car_info as $car)
   {   
       $ed=$car['booking_date'];

       $varr="UPDATE rental_car
       SET c_avail='1', booking_date='0000-00-00', user_id=1
       WHERE CURRENT_DATE()<$ed";

       $conn->exec($varr);
       
       if($car['c_avail']=='1'){
         echo "
         <div class='car_details'>
       <div class='card'>

           <div class='image'>
              <img src='$car[car_pic]'>
           </div>
           <div class='title'>
            <h1>$car[car_model]</h1>
           </div>
           <div class='des'>
            <p>Rent: $car[rent]</p>
            <a href='rental_car_form.php?c_id=$car[car_id]'><button>Book</button></a>
           </div>
       </div> 
   </div>                                           
     ";
       }
      }

?>
</main>
</body>
</html>