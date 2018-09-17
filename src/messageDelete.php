<?php
include 'messageFunction.php';
var_dump($_GET['deleteId']);

if ( isset($_GET['deleteId']) ){
    $result = DeleteMessage('deleteId');
    echo '已刪除資料';
}
?>
<html>
    <form action="Sample.php">
        <input type="submit" value="回到首頁" name="home" />
    </form>
</html>