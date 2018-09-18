<?php
//include 'messageFunction.php';
require __DIR__.'/../config/bootstrap.php';

if ( isset( $_GET['edit_id']) ){
    $editId = $_GET['edit_id'];
    $board = $em->getRepository('Board')->find($editId);
}
?>
<h2>編輯留言板</h2>
<form method="post" action="messageFresh.php">
    <input name="id" type="hidden" value="<?= $board->getId();?>">
    姓名: <?= $board->getName();?><br>
    留言內容:<br>
    <textarea name="message" rows="8" cols="30"><?= $board->getMessage();?></textarea><br/>
    <input name="submit" type="submit" value="送出">
    <input name="time" type="hidden" value="<?= $board->getId();?>">
</form>

