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
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      background-size: cover;
      background-repeat: no-repeat;
      justify-content: center;
      padding: 1vw;
    }

 
    .title{
        text-align: center;
        font-size: 30px;
        font-family: Consolas;
        padding: 00.8vh;
        color: black;
        border-bottom: 2px solid black;
        border-top: 2px solid black ;
        font-weight: bold;
    }
/* -------------------------- */

* {
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  background: #f7f6ff;
}

h2 {
  margin: 16px;
}

.container {
  margin-top: 50px;
  padding: 20px;
}

.select-box {
  display: flex;
  width: 400px;
  flex-direction: column;
}

.select-box .options-container {
  background: #2f3640;
  color: #f5f6fa;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected {
  background: #2f3640;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #f5f6fa;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 100%;
  width: 32px;
  right: 10px;
  top: 5px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 8px;
  background: #0d141f;
  border-radius: 0 8px 8px 0;
}

.select-box .options-container::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box .option:hover {
  background: #414b57;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}
/* -------------------------- */
.container2 {
  padding: 20px;
  }
  
  .select-box2 {
  display: flex;
  width: 400px;
  flex-direction: column;
  }
  
  .select-box2 .options-container2 {
  background: #2f3640;
  color: #f5f6fa;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 8px;
  overflow: hidden;
  
  order: 1;
  }
  
  .selected2 {
  background: #2f3640;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #f5f6fa;
  position: relative;
  order: 0;
  }
  
  .selected2::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;
  
  position: absolute;
  height: 100%;
  width: 32px;
  right: 10px;
  top: 5px;
  
  transition: all 0.4s;
  }
  
  .select-box2 .options-container2.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
  }
  
  .select-box2 .options-container2.active + .selected2::after {
  transform: rotateX(180deg);
  top: -6px;
  }
  
  .select-box2 .options-container2::-webkit-scrollbar {
  width: 8px;
  background: #0d141f;
  border-radius: 0 8px 8px 0;
  }
  
  .select-box2 .options-container2::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
  }
  
  .select-box2 .option2,
  .selected2 {
  padding: 12px 24px;
  cursor: pointer;
  }
  
  .select-box2 .option2:hover {
  background: #414b57;
  }
  
  .select-box2 label {
  cursor: pointer;
  }
  
  .select-box2 .option2 .radio2 {
  display: none;
  }

/* ---------------------------------- */

.date{
  display: flex;
  width: 400px;
  height: 43px;
  background: #2f3640;
  color: #f5f6fa;
  border-radius: 8px; 
  margin: 8px; 
  padding: 20px;
}

#btn{
    background-color: #2f3640;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 8px; 
    margin: auto;
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

<main class="main">
<div class="title">Trip Designer</div>


<form action="trip_designer_result.php" method="POST">

<div class="container">

      <div class="select-box">
        <div class="options-container">
          
        <div class="option">
            <input  type="radio" class="radio" id="dhaka" name="category"  value="Dhaka"/>
            <label for="dhaka">Dhaka</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Cox" name="category"  value="Cox"/>
            <label for="Cox">Cox's Bazar</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Bandarban" name="category"  value="Bandarban"/>
            <label for="Bandarban">Bandarban</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Sylhet" name="category"  value="Sylhet"/>
            <label for="Sylhet">Sylhet</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Saint Martin" name="category"  value="Saint Martin"/>
            <label for="Saint Martin">Saint Martin</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Chattogram" name="category"  value="Chattogram"/>
            <label for="Chattogram">Chattogram</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Sajek Valley" name="category"  value="Sajek Valley"/>
            <label for="Sajek Valley">Sajek Valley</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Sundarban" name="category"  value="Sundarban"/>
            <label for="Sundarban">Sundarban</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Rangamati" name="category"  value="Rangamati"/>
            <label for="Rangamati">Rangamati</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Panchagarh" name="category"  value="Panchagarh"/>
            <label for="Panchagarh">Panchagarh</label>
          </div>
        </div>

        <div class="selected">
          Select Destination
        </div>
      </div>
    </div>


    <!-- ----------- -->
<form action="trip_designer_result.php" method="GET">
    <div class="container2">
      <div class="select-box2">
        <div class="options-container2">
          <div class="option2">
            <input
              type="radio"
              class="radio2"
              id="automobiles"
              name="category2"
              value="4000"
            />
            <label for="automobiles">1-4000</label>
          </div>

          <div class="option2">
            <input type="radio" class="radio2" id="budget2" name="category2"  value="8000"/>
            <label for="budget2">4001-8000</label>
          </div>

          <div class="option2">
            <input type="radio" class="radio2" id="budget3" name="category2"  value="10000"/>
            <label for="budget3">8001-10000</label>
          </div>
        </div>

        <div class="selected2">
          Select Budget
        </div>
      </div>
    </div>

    <!-- ------------ -->
    
<form action="trip_designer_result.php" method="GET"> 
    <div class="container2"><input class="date" type="date" name="Date" placeholder="Date" /></div>

    <div class="container2">
             <button class="ui right labeled icon button" id="btn" type="submit" name="button">
                     <i class="right arrow icon"></i>
                         Submit
             </button></div>
</form>
</main>

    <script>
        const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

// --------------------------

const selected2 = document.querySelector(".selected2");
const optionsContainer2 = document.querySelector(".options-container2");

const optionsList2 = document.querySelectorAll(".option2");

selected2.addEventListener("click", () => {
  optionsContainer2.classList.toggle("active");
});

optionsList2.forEach(a => {
  a.addEventListener("click", () => {
    selected2.innerHTML = a.querySelector("label").innerHTML;
    optionsContainer2.classList.remove("active");
  });
});
    </script>

</body>
</html>