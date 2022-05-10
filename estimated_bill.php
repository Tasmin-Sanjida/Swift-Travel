<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimated Bills</title>
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

/* ------------------------------------------------------------------- */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { 
    display: inline-block; 
}

/* heading */

h1 { font: bold 100% sans-serif; 
    letter-spacing: 0.5em;
     text-align: center; 
     text-transform: uppercase; 
    }

/* table */

table { 
    font-size: 75%; 
    table-layout: fixed; 
    width: 100%; 
}
table { 
    border-collapse: separate;
     border-spacing: 2px; 
    }
th, td { border-width: 1px; 
    padding: 0.5em; 
    position: relative; 
    text-align: left; 
}
th, td { border-radius: 0.25em; 
    border-style: solid; 
}
th { background: #EEE; 
    border-color: #BBB; 
}
td { border-color: #DDD; 
}

/* page */

html { 
    font: 16px/1 'Open Sans', sans-serif; 
    overflow: auto; 
    padding: 0.5in; 
}
html { 
    background: #999; 
    cursor: default; }

body { 
    box-sizing: border-box;
     height: 11in; 
     margin: 0 auto; 
     overflow: hidden; 
     padding: 0.5in; 
     width: 8.5in; 
    }
 body { 
     background: #FFF;
     border-radius: 1px; 
     box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { 
    margin: 0 0 3em; 
}
header:after { clear: both; 
    content: ""; 
    display: table; 
}

header h1 { background: #000; 
    border-radius: 0.25em; 
    color: #FFF; 
    margin: 0 0 1em; 
    padding: 0.5em 0; 
}
header address { float: left; 
    font-size: 75%; 
    font-style: normal; 
    line-height: 1.25; 
    margin: 0 1em 1em 0; }

header address p { 
    margin: 0 0 0.25em;
 }

header span, header img { display: block; 
    float: right; 
}
header span { margin: 0 0 1em 1em; 
    max-height: 25%;
     max-width: 60%; 
     position: relative; 
    }



/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }

article:after { 
    clear: both; 
    content: ""; 
    display: table; 
}
article h1 { clip: rect(0 0 0 0); 
    position: absolute; 
}

article address { float: left; 
    font-size: 125%; 
    font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; 
    width: 36%; 
}

table.meta:after, table.balance:after { clear: both; 
    content: ""; 
    display: table; 
}

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; 
    width: 100%; 
}
table.inventory th { font-weight: bold; 
    text-align: center;
 }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; 
    border-width: 0 0 1px; 
    margin: 0 0 1em; 
}
aside h1 { border-color: #999; 
    border-bottom-style: solid;
 }


/* ------------------------------------------------------------------- */

.footer{
   text-align: center;
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

            <a href="logout.php"><div class="ui animated fade button" tabindex="0" id="btn_type2">
               <div class="visible content">Log Out</div>
               <div class="hidden content">
                 <i class="handshake outline icon"></i>
               </div>
             </div></a> 
       </div>
   </header>

   <div class="up_title">
              <p>WELCOME<br><u>Estimated Bill</u></p>
   </div>

   <main>
      <?php
           
           $user_id=$_SESSION['u_id'];
           $user_name=$_SESSION['u_name'];
           $user_mail=$_SESSION['u_mail'];


           echo"

           <header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>$user_id</p>
				<p>$user_name</p>
				<p>$user_mail</p>
			</address>
			
		</header>

        ";

        $cd=date("Y/m/d");
        $rn=rand();
        echo "
           
           
        <article>
			<table class='meta'>
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>$rn</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>$cd</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span id='prefix' contenteditable>$</span><span>0.00</span></td>
				</tr>
			</table>
        ";

        echo "

        <table class=inventory>
				<thead>
					<tr>
                        <th><span contenteditable>SL. NO</span></th>
						<th><span contenteditable>Booking Type</span></th>
						<th><span contenteditable>Description</span></th>
                        <th><span contenteditable>Specification</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
        ";
        

           
           include 'database.php';
           $sum=0;
           $sum2=0;
           $sum3=0;
           $sum4=0;
           $sl=1;
           
           $sql_room_bill="SELECT * From room_booking WHERE user_id= '$user_id'";
           $returnobj=$conn->query($sql_room_bill);
           $bill_info=$returnobj->fetchAll();


          
              
               foreach ($bill_info as $bill)
               {
                   $hotel_name=$bill['h_name'];
                   $room=$bill['room_id'];
                   $p=$bill['price'];
                   $sum=$sum+$p;
                   
                   echo"
                   <tbody>
					<tr>
						<td><span contenteditable>$sl</span></td>
						<td><span contenteditable>Room Booking</span></td>
						<td><span contenteditable>$hotel_name</span></td>
						<td><span contenteditable>$room</span></td>
						<td><span>$p</span></td>
					</tr>
				</tbody>
                ";
                $sl=$sl+1;   
               } 

               $sql_room_bill="SELECT * From ticket_bboking WHERE user_id= '$user_id'";
               $returnobj=$conn->query($sql_room_bill);
               $bill_info=$returnobj->fetchAll();
                  
                   foreach ($bill_info as $bill)
                   {
                       $ticket_id=$bill['t_id'];
                       $t_m=$bill['travel_medium'];
                       $p=$bill['t_price'];
                       $sum2=$sum2+$p;
                       echo"
                   <tbody>
					<tr>
						<td><span contenteditable>$sl</span></td>
						<td><span contenteditable>Ticket Booking</span></td>
						<td><span contenteditable>$t_m</span></td>
						<td><span contenteditable>$ticket_id</span></td>
						<td><span>$p</span></td>
					</tr>
				</tbody>
                ";
                $sl=$sl+1;   
                   } 

                   $sql_room_bill="SELECT * From rental_car WHERE user_id= '$user_id'";
                   $returnobj=$conn->query($sql_room_bill);
                   $bill_info=$returnobj->fetchAll();
                      
                       foreach ($bill_info as $bill)
                       {
                           $car_name=$bill['car_model'];
                           $c_id=$bill['car_id'];
                           $p=$bill['rent'];
                           $sum3=$sum3+$p;
                           echo"
                           <tbody>
                            <tr>
                                <td><span contenteditable>$sl</span></td>
                                <td><span contenteditable>Car Booking</span></td>
                                <td><span contenteditable>$car_name</span></td>
                                <td><span contenteditable>$c_id</span></td>
                                <td><span>$p</span></td>
                            </tr>
                        </tbody>
                        ";
                        $sl=$sl+1;
                       } 


                   $sql_room_bill="SELECT * From guide WHERE user_id= '$user_id'";
                   $returnobj=$conn->query($sql_room_bill);
                   $bill_info=$returnobj->fetchAll();
                      
                       foreach ($bill_info as $bill)
                       {
                           $g_name=$bill['g_name'];
                           $g_id=$bill['g_iid'];
                           $p=$bill['g_charge'];
                           $sum4=$sum4+$p;
                           echo"
                           <tbody>
                            <tr>
                                <td><span contenteditable>$sl</span></td>
                                <td><span contenteditable>Guide Hiring</span></td>
                                <td><span contenteditable>$g_name</span></td>
                                <td><span contenteditable>$g_id</span></td>
                                <td><span>$p</span></td>
                            </tr>
                        </tbody>
                        ";
                        $sl=$sl+1;
                       } 

                $total=$sum+$sum2+$sum3+$sum4;
                      
                echo"
                </table>
                <table class='balance'>
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>$total</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>$</span><span>$total</span></td>
				</tr>
			</table>
                "

      ?>

   </main>
		
   </article>
		<aside>
			<h1><span contenteditable>SWIFT TRAVEL</span></h1>
			<div contenteditable class="footer">
				<p>“Travel is the only thing you buy that makes you richer”</p>
			</div>
            <div>
                
            </div>
		</aside>		
 
</body>
</html>