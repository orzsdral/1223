<?php 
//連結資料庫
$user="root";
$pass="root";
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=member",$user,$pass);