<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places to Visit</title>
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
        padding-bottom: 00.15vh;
    }
    
*{
 margin: 0px;
 padding: 0px;
}

.main{

 margin: 2%;
 display: flex;
 flex-direction: row;
}

.card{
     width: 20%;
     /* display: inline-block; */
     /* box-shadow: 2px 2px 20px black; */
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  height: 32vh;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
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
              <div class="ui animated fade button" tabindex="0" id="btn_type2">
                <div class="visible content">Sign-up / Log in</div>
                <div class="hidden content">
                  <i class="handshake outline icon"></i>
                </div>
              </div>
        </div>
    </header>
    <div class='up_title'>
                       <p>WELCOME<br><u>Plcaes to Visits</u></p>
      </div>
      <main class='main'>
<?php
            $id=$_GET['destination'];
            include 'database.php';
            $sql_des_id="SELECT * From places_to_visit WHERE  d_id = '$id'";
            $returnobj=$conn->query($sql_des_id);
                $des_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($des_info as $destination)
                {
                    
                  echo "
                  

                  <div class='card'>
                   
                   <div class='image'>'
                      <img src='$destination[place_pic]'>
                   </div>
                   <div class='title'>
                    <h1>
                    $destination[place_name]  </h1>
                   </div>
                   </div>
                   <!--cards -->
                        
             
              ";

                
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