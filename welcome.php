<?php
session_start();  //很重要，可以用的變數存在session裡
$username=$_SESSION["username"];
?>

<html lang="zh-TW" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title>野外肉粗</title>
      <link rel="shortcut icon" type="image/x-icon" href="asset/logo.ico">
      <link rel="stylesheet" href="./css/style_buy.css">
    </head>

    <body>
        <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true">

          <div class="order">
            <label for="chk" aria-hidden="true">雞肉餐盒</label>
            <h2 class="information">學生價$80 | 原價$85</h2>
            <h3 class="information">餐盒配料：雞腿肉120g 白飯120g 高麗菜80g 地瓜葉50g 地瓜30g 糖心蛋35g 番茄25g</h3>
            <h3 class="information">營養素：熱量423卡 碳水化合物53.6g 脂肪7g 蛋白質36g</h3>
          </div>

          <div class="info">
            <form name="orderForm" method="post" action="order.php" onsubmit="return validateForm()">
              <label for="chk" aria-hidden="true">訂購</label>
              <input type="quantity" name="quantity" placeholder="數量" required="">
              <input type="orderPlace" name="orderPlace" placeholder="地址" required="" id='orderPlace'>
              <button type="order" value="order" name="order">購買</button>
            </form>
            <a class="button" href = "logout.php">登出</a>
          </div>
        </div>
    </body>

</html>
