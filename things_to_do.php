<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things To Do</title>
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

    .list{
        display: flex;
        align-items: center;
        justify-content: center;
        /* text-align: center; */
        font-size: 20px;
        font-family: Comic Sans MS;
        padding-bottom: 00.15vh;
        background-color: white;
    }

    .foot{
      padding: 5vh;
    }

    .end{
        text-align: center;
        font-size: 15px;
        font-family: Comic Sans MS;
        padding-bottom: 00.15vh;
    }
/* 
    .main{
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
      background-image: url(./image/word-image.gif); 
      background-size: cover;
      background-repeat: no-repeat;
      justify-content: center;
      padding: 1vw;
    }
     */
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

    <main class="main">
        <div class="up_title">
           <p>WELCOME<br><u>Things To Do...</u></p>
        </div>
        <?php
            $id=$_GET['destination'];
            include 'database.php';
            $sql_des_id="SELECT * 
            From things_to_do
            WHERE d_id='$id'
            GROUP BY description";
            
            $returnobj=$conn->query($sql_des_id);
                $des_info=$returnobj->fetchAll();
        
               
                foreach ($des_info as $destination)
                {
                    
               echo"
               <div  class='list'>
               <ul>
                  <li>$destination[description]</li>
               </ul>
               </div>
                ";

                
                }
     

    ?>
        <!-- <div class="list">
            <ul>
              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
              <li>Delectus, quo laudantium. Ullam eum, et.</li>
              <li>Mollitia enim nemo velit minima consequuntur sapiente </li>
              <li>Balias nostrum quasi quod delectus impedit dolorem, non blanditiis</li>
            </ul>
        </div>
    </main>     -->

    <footer class="foot">
      <div class="end">
        <p>“Take only memories, leave only footprints” ~ Chief Seattle<br>So<br> <u>ENJOY</u></p>
      </div>
    </footer>

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
