<?php
include 'messageFunction.php';
include __DIR__.'/../config/bootstrap.php'; //置入  db_doctrine

if ( isset($_GET['delete_id']) ){
    // messageFunction.php
    DeleteMessage($_GET['delete_id'], $em);
    echo '已刪除資料';
}
?>

<html>
    <form action="Sample.php">
        <input type="submit" value="回到首頁" name="home" />
    </form>
</html>