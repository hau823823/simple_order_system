<?php
  // 已登入直接跳轉購物頁
  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: welcome.php");
      exit;
  }
?>

<html lang="zh-TW" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title>野外肉粗</title>
      <link rel="shortcut icon" type="image/x-icon" href="asset/logo.ico">
      <link rel="stylesheet" href="./css/style_index.css">
    </head>

    <body>
        <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true">

          <div class="signup">
            <form method="post" action="login.php">
              <label for="chk" aria-hidden="true">Login</label>
              <input type="text" name="username" placeholder="名稱" required="">
              <input type="password" name="password" placeholder="密碼" required="">
              <button type="submit" value="登入" name="submit">登入</button>
            </form>
          </div>

          <div class="login">
            <form name="registerForm" method="post" action="register.php" onsubmit="return validateForm()">
              <label for="chk" aria-hidden="true">Sign up</label>
              <input type="text" name="username" placeholder="名稱" required="">
              <input type="phone" name="phone" placeholder="電話" required="">
              <input type="password" name="password" placeholder="密碼" required="" id='password'>
              <input type="password" name="password_check" placeholder="確認密碼" required="" id="password_check">
              <button type="submit" value="註冊" name="submit">註冊</button>
              <button type="reset" value="重設" name="submit">重設</button>
            </form>
          </div>
        </div>

        <script>
          function validateForm() {
            var x = document.forms["registerForm"]["password"].value;
            var y = document.forms["registerForm"]["password_check"].value;
            if (x.length < 6) {
              alert("密碼長度不足");
              return false;
            }
            if (x != y) {
              alert("請確認密碼是否輸入正確");
              return false;
            }
          }
        </script>
    </body>

</html>
