<?php include('header.php');?>

    <h1>會員註冊</h1>
    <form action="reme_com.php" method="post">
        會員姓名:<input type="text" name="name" placeholder="請輸入姓名" required>
        電子郵件:<input type="email" name="email" placeholder="請輸入電郵" required>
        會員密碼:<input type="password" name="password" placeholder="請輸入密碼" required>

        <input type="submit" name="submit">
    </form>
    
    <?php include('footer.php');?>