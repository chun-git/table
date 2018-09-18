<?php
require __DIR__.'/../config/bootstrap.php'; //置入  db_doctrine
?>

<div> <h2 class="text-center"> DB留言版 </h2></div>
<table border="1">
    <tr><td>Id</td>
        <td>name</td>
        <td>留言內容</td>
    </tr>
<?php
// 顯示訊息內容
$query = $em->createQuery("SELECT b FROM Board b ");
$row = $query->getArrayResult();

foreach ($row as $i){
    echo "<tr><td>{$i['id']}</td>";
    echo "<td>{$i['name']}</td>";
    echo "<td>{$i['message']}</td>";
    echo "<td><a href=\"messageEdit.php?edit_id={$i['id']}\">編輯</a></td>";
    echo "<td><a href=\"messageDelete.php?delete_id={$i['id']}\">刪除</a></td></tr>";
}
?>
</table><br>

<form method="post" action="Message.php">
    姓名：<input type="text" name="name"><br>
    留言板:<br>
    <textarea name="message" cols="40" rows="5"></textarea> <br>
    <input type="submit" value="送出留言">
    <input type="reset"  value="清除內容">
</form>
