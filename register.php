<?php
  $conn=require_once("config.php");

  if($_SERVER["REQUEST_METHOD"]=="POST"){
     $username=$_POST["username"];
     $phone= $_POST["phone"];
     $password=$_POST["password"];

     //檢查帳號是否重複
     $check="SELECT * FROM member_info WHERE name='".$username."'";
     if(mysqli_num_rows(mysqli_query($conn,$check))==0){
         $sql="INSERT INTO member_info (id, name, phone, password)
             VALUES(NULL,'".$username."','".$phone."','".$password."')";

         if(mysqli_query($conn, $sql)){
             echo "註冊成功!3秒後將自動跳轉頁面<br>";
             echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
             header("refresh:3;url=index.php");
             exit;
         }else{
             echo "Error creating table: " . mysqli_error($conn);
         }
     }
     else{
         echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
         echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
         header("refresh:3;url=index.php");
         exit;
     }
  }


  mysqli_close($conn);

  function function_alert($message) {
     echo "<script>alert('$message');
      window.location.href='index.php';
     </script>";
     return false;
  }
?>
