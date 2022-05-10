<!DOCTYPE html>
<html>
<head>
 <title>All Tourist Spot</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<style type="text/css">
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
     
    #btn_type1 , #btn_type_name, #btn_ins{
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

    #btn_type3{
      background-color: black;
      color: white;
      border-radius: 20px;
      font-family: Comic Sans MS;
    }

    #btn_type1:hover , #btn_ins:hover{
     background-color: rgb(194, 189, 189);
     color: black;
     transition: .5s;
     cursor: pointer;
     border-radius: 20px;
    }



*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
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
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}
/* a:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
} */

a{
  text-decoration: none;
  color: black;
}

</style>
<body>
   <header class="header">
      <div class="logo_name">
          <img src="./image/st_logo.jpg" height="70px" width="40px">
          <h2 class="name">Swift Travel</h2>
      </div>

      <div class="btn" >
          <div class="ui animated button" tabindex="0" id="btn_type1">
              <div class="visible content">Home</div>
              <div class="hidden content">
                <i class="home icon"></i>
              </div>
            </div>
            <?php
            session_start();

           
            if (!empty($_SESSION['u_id'])){
              echo"

              <a href='insurance.php'>
              <div class='ui animated fade button' tabindex='0' id='btn_ins' >
                <div class='visible content'>Insurance</div>
                <div class='hidden content'>
                <i class='accusoft icon'></i>
                  </div>
              </div></a>

              <a href='payment.php'>
              <div class='ui animated fade button' tabindex='0' id='btn_ins' >
                <div class='visible content'>Cash In</div>
                <div class='hidden content'>
                <i class='accusoft icon'></i>
                  </div>
              </div></a>

              <div class='ui animated fade button tabindex='0' id='btn_type_name'>
              <div class='visible content'><i class='user icon'></i>$_SESSION[u_name]</div>
              <div class='hidden content'>
              <i class='user icon'></i>
              </div>
            </div>

              <div class='ui animated fade button tabindex='0' id='btn_type3'>
              <div class='visible content'>Log Out</div>
              <div class='hidden content'>
                 <a href='logout.php'><i class='handshake outline icon'></i></a>
              </div>
            </div>";

            }

           
            else{
             
              echo"

              <a href='sign_up.html'>
              <div class='ui animated fade button' tabindex='0' id='btn_ins' >
                <div class='visible content'>Insurance</div>
                <div class='hidden content'>
                <i class='accusoft icon'></i>
                  </div>
              </div></a>

              <a href='sign_up.html'>
              <div class='ui animated fade button' tabindex='0' id='btn_ins' >
                <div class='visible content'>Cash In</div>
                <div class='hidden content'>
                <i class='accusoft icon'></i>
                  </div>
              </div></a>

              <div class='ui animated fade button tabindex='0' id='btn_type2'>
              <div class='visible content'>Sign in / Log In</div>
              <div class='hidden content'>
                 <i class='handshake outline icon'></i>
              </div>
            </div>";
              
            }
            

?>
            
      </div>
  </header>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="./image/lalbag.jpg">
</div>
<div class="title">
 <h1>
    Dhaka City</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Dhaka City">Read more...</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="./image/Inani Beach.jpg">
</div>
<div class="title">
 <h1>
    Cox's Bazar </h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Cox Bazar">Read more...</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
    <img src="./image/Nafakhum_Waterfall.jpg">
</div>
<div class="title">
    <h1> Bandarban</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Bandarban">Read more...</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="./image/Sreemangal_tea_garden.jpg">
</div>
<div class="title">
 <h1>
    Sylhet</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Sylhet">Read more...</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="./image/Saint_Martin_Island.jpg">
</div>
<div class="title">
 <h1>
    Saint Martin </h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Saint Martin">Read more...</a></button>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="./image/Patenga_beach.jpg">
</div>
<div class="title">
 <h1>
    Chattogram </h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Chattogram">Read more...</a></button>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="./image/Konglak_Hill.jpg">
</div>
<div class="title">
 <h1>
    Sajek Valley  </h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Sajek Valley">Read more...</a></button>

</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="./image/Kotka_Beach.jpg">
</div>
<div class="title">
 <h1>
    Sundarban</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Sundarban">Read more...</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="./image/Rongrang_Hill.jpg">
</div>
<div class="title">
 <h1>
    Rangamati </h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
 <button><a href="destination2.php?destination=Rangamati">Read more...</a></button>
</div>
</div>

<div class="card">

    <div class="image">
       <img src="./image/Banglabanda_Zero_Point.jpg">
    </div>
    <div class="title">
     <h1>
        Panchagarh</h1>
    </div>
    <div class="des">
     <p>You can Add Desccription Here...</p>
     <!-- <a href="index.html?destination=panchagar">abcdddddd</a> -->
     <button><a href="destination2.php?destination=panchagar">Read more...</a></button>
    </div>
    </div>
</div>


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
