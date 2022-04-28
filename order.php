<?php
  session_start();

  $conn=require_once("config.php");

  if($_SERVER["REQUEST_METHOD"]=="POST"){
     $username=$_SESSION["username"];
     $quantity= $_POST["quantity"];
     $orderPlace=$_POST["orderPlace"];

     $sql="INSERT INTO order_list (orderID, name, quantity,orderPlace)
         VALUES(NULL,'".$username."','".$quantity."','".$orderPlace."')";

     if(mysqli_query($conn, $sql)){
         echo "購買成功!<br>";
         header("refresh:10;url=index.php");
         exit;
     }else{
         echo "Error creating table: " . mysqli_error($conn);
     }
  }


  mysqli_close($conn);
?>
