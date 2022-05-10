<?php
 try{

  $conn=new PDO('mysql:host=localhost:3306;dbname=st','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //enveroment variable

}
catch(PDOException $s)
{
  echo $s;
}