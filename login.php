
<?php include('db.php');
$sql='SELECT * FROM `ml` WHERE `email`=:email';
$statment= $pdo->prepare($sql);
$statment->bindValue(':email',$_POST['email']);
$statment->execute();

while(($result = $statment->fetch(PDO::FETCH_ASSOC)) !== false){
   
if($result['email']!= $_POST['email'])
{   
    echo "無此帳號<br>";
    echo '<a href="member.php">返回從重新輸入</a>';
}
else{
    if($result['password']!= $_POST['password'])
    {
        echo "密碼錯誤<br>";
        echo '<a href="member.php">返回從重新輸入</a>';
    }
    else{
        echo '<h1>登入成功</h1>';
        echo "HI,".$result['name']."歡迎登入";
    }
}




}
?>
