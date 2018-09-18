<?php
require __DIR__.'/../config/bootstrap.php'; //置入  db_doctrine

// 設定文件utf-8編碼
header("Content-Type:text/html; charset=utf-8");

if ( isset( $_POST['name']) && isset($_POST['message'])){
    $name    = ($_POST['name']);
    $message = ( $_POST['message']);
}
$board = new Board($name,$message);
$board->setName($name);
$board->setMessage($message);
$board->setUpdateTime(new DateTime());

$em->persist($board);
$em->flush();

header("Location: Sample.php");


