<?php
header("Content-Type:text/html; charset=utf-8");

include __DIR__.'/../config/bootstrap.php'; //置入  db_doctrine

function DeleteMessage($id)
{
    $em = $GLOBALS['em'];
    $query = $em->createQuery("SELECT b FROM Board b WHERE b.id := '$id'");
    $query->setParameter('id', $id);
    $test = $query->getArrayResult();
    $em->remove($test);
    $em->flush();
}

function EditMessage($id)
{
    $findId = $em->find('Board', $id);
    $board->setMessage($message);
    $board->setUpdateTime(new DateTime());
    $em->flush();

}


