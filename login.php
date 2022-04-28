<?php
  $conn=require_once "config.php";

  $username=$_POST["username"];
  $password=$_POST["password"];

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "SELECT * FROM member_info WHERE name ='".$username."'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
          session_start();
          $_SESSION["loggedin"] = true;
          $_SESSION["username"] = $username;
          header("location:welcome.php");
      }else{
          function_alert("帳號或密碼錯誤");
      }
  }else {
    function_alert("Something wrong");
  }

  mysqli_close($link);

  // Display the alert box
  function function_alert($message) {
     echo "<script>alert('$message');
      window.location.href='index.php';
     </script>";
     return false;
  }
?>
