<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance</title>
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

   #btn_type1, #btn_type_name{
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

   #btn_type1:hover, #btn_type_name:hover{
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

padding-bottom: 5%;
}

.card{
   width: 80%;
   display: inline-block;
   box-shadow: 2px 2px 10px black;
   border-radius: 5px; 
   margin: 2%;
  }

.image img{
width: 100%;
height: 250px;
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
</style>

<body>
<header class="header">
       <div class="logo_name">
           <img src="./image/st_logo.jpg" height="70px" width="40px">
           <h2 class="name">Swift Travel</h2>
       </div>

       <div class="btn" >
           <a href="index.html"><div class="ui animated button" id="btn_type1" tabindex="0">
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
     <img src="./image/travel-insurance.jpg">
     <main class="main">
</h1>

     <?php
      
      $user_id=$_SESSION['u_id'];
      include 'database.php';

      $sql_user_ins="SELECT * 
      FROM `insurance` 
      WHERE user_id='$user_id'";

      $returnobj=$conn->query($sql_user_ins);
      $ins_info=$returnobj->fetch();

      $health=$ins_info['Health'];
      $things=$ins_info['things'];
      $cancel=$ins_info['trip_cancel'];

      if($things==0){
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/things.jpg'>
        </div>
        <div class='title'>
        <h1>Things Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 50,000<br>Pay: 500 per month</p>
        <button><a href='insurance_buy.php?ins=things'>Buy</a></button>
        </div>
        </div>
        ";
      }

      else{
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/things.jpg'>
        </div>
        <div class='title'>
        <h1>Things Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 50,000<br>Pay: 500 per month</p>
        <a href='insurance_buy.php?ins=things'><button disabled>Buy</button></a>
        </div>
        </div>
        ";
      }

      if($health==0){
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/medical.jpg'>
        </div>
        <div class='title'>
        <h1>Medical Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 1,00,000<br>Pay: 800 per month</p>
        <button><a href='insurance_buy.php?ins=medical'>Buy</a></button>
        </div>
        </div>
        ";
      }

      else{
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/medical.jpg'>
        </div>
        <div class='title'>
        <h1>Medical Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 1,00,000<br>Pay: 800 per month</p>
        <a href='insurance_buy.php?ins=things'><button disabled>Buy</button></a>
        </div>
        </div>
        ";
      }


      if($cancel==0){
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/cancel.jpg'>
        </div>
        <div class='title'>
        <h1>Trip Cancelation Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 40,000<br>Pay: 1000 per month</p>
        <button><a href='insurance_buy.php?ins=cancel'>Buy</a></button>
        </div>
        </div>
        ";
      }

      else{
        echo"
        <div class='card'>

        <div class='image'>
        <img src='./image/cancel.jpg'>
        </div>
        <div class='title'>
        <h1>Trip Cancelation Insurance</h1>
        </div>
        <div class='des'>
        <p>Insurance Amount : 40,000<br>Pay: 1000 per month</p>
        <a href='insurance_buy.php?ins=things'><button disabled>Buy</button></a>
        </div>
        </div>
        ";
      }

?>
<!-- 
          <div class="card">

          <div class="image">
            <img src="./image/things.jpg">
          </div>
          <div class="title">
          <h1>Things Insurance</h1>
          </div>
          <div class="des">
          <p>Insurance Amount : 50,000<br>Pay: 500 per month</p>
          <button><a href="insurance_buy.php?ins=things">Buy</a></button>
          </div>
          </div>

          <div class="card">

          <div class="image">
            <img src="./image/medical.jpg">
          </div>
          <div class="title">
          <h1>Medical Insurance</h1>
          </div>
          <div class="des">
          <p>Insurance Amount : 1,00,000<br>Pay: 800 per month</p>
          <button><a href="insurance_buy.php?ins=medical">Buy</a></button>
          </div>
          </div>

          <div class="card">

          <div class="image">
            <img src="./image/cancel.jpg">
          </div>
          <div class="title">
          <h1>Trip Cancelation Insurance</h1>
          </div>
          <div class="des">
          <p>Insurance Amount : 40,000<br>Pay: 1000 per month</p>
          <button><a href="insurance_buy.php?ins=cancel">Buy</a></button>
          </div>
          </div> -->
     </main>
</body>
</html>