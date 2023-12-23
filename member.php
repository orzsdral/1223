<?php include('header.php');?>
    <h1>會員登入</h1>
    <form action="login.php" method="post">
   
    Email:<input type="email" name="email" placeholder="請輸入電郵">
  
    Password:<input type="password" name ="password"placeholder="請輸入密碼">
   
    <input type="submit" name="submit">

    <hr>
    <a href="reme.php" id="lik">註冊會員</a>
    </form>
    
    
    <?php include('footer.php');?>