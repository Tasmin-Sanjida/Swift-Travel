<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<style>
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
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
      color: white;

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
      padding: 1vw;
      padding-bottom: 0%;
    } 
    
    .header .btn_yo{
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

.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
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

#btn1{
    background-color: white;
    color: black;
    border: black;

}
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-color: rgb(22, 48, 26);
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}

</style>
<body>

<header class="header">
        <div class="logo_name">
            <img src="./image/st_logo.jpg" height="70px" width="40px">
            <h2 class="name">Swift Travel</h2>
        </div>

        <div class="btn_yo" >
           <a href="index.html"> <div class="ui animated button" id="btn_type1" tabindex="0">
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

              <a href="logout.php"><div class="ui animated fade button" tabindex="0" id="btn_type2">
                <div class="visible content">Log Out</div>
                <div class="hidden content">
                  <i class="handshake outline icon"></i>
                </div>
              </div></a>
        </div>
    </header>
<?php

   $guide_id=$_GET['g_id'];

    echo"
    <form method='POST' action='final_guide_book.php?g=$guide_id'>
    <div class='login-box'>
      <h1>Hire a Guide</h1>
      <div class='textbox'>
      <i class='male icon'></i>
        <input type='date' placeholder='Start Date' name='booking_date'>
      </div>
      <input type='submit' class='btn' value='Book'>
    </div>
    </form>
    ";
?>

</body>
</html>

</body>
</html>