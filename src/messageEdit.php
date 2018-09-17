<?php
include 'messageFunction.php';

if ( isset( $_POST['editId']) ){
    $result = EditMessage('editId');
    echo '已編輯資料';
}

echo"沒編輯";