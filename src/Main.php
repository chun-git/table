<?php
require __DIR__.'/../config/Bootstrap.php'; //置入  db_doctrine
?>

<div> <h2 class="text-center"> DB留言版 </h2></div>
<table border="1">
    <tr><td>Id</td>
        <td>name</td>
        <td>留言內容</td>
        <td>留言時間</td>
    </tr>
<?php
// 顯示訊息內容
$query = $em->createQuery("SELECT b FROM Board b ");
$row = $query->getResult();

foreach ($row as $i) {
    $date = $i->toArray();
    echo "<tr><td>{$date['id']}</td>";
    echo "<td>{$date['name']}</td>";
    echo "<td>{$date['message']}</td>";
    echo "<td>{$date['update_time']}</td>";
    echo "<td><a href=\"MessageEdit.php?edit_id={$date['id']}\">編輯</a></td>";
    echo "<td><a href=\"MessageDelete.php?delete_id={$date['id']}\">刪除</a></td></tr>";
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
