<?php include('db.php');
$sql = 'INSERT INTO `ml` (`email`,`password`,`name`) Value(:remail,:rpassword,:rname)';
$statement=$pdo->prepare($sql);
$statement->bindValue(':remail',$_POST['email']);
$statement->bindValue(':rpassword',$_POST['password']);
$statement->bindValue(':rname',$_POST['name']);
$statement->execute();
?>

<h1>註冊成功</h1>
<a href="member.php">返回登入頁面</a>