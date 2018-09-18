<?php
include __DIR__.'/../config/Bootstrap.php'; //置入  db_doctrine

function DeleteMessage($id,$em)
{
    $query = $em->createQuery("SELECT b FROM Board b WHERE b.id = :delete_id");
    $query->setParameter('delete_id', $id);
    $result = $query->getSingleResult();
    $em->remove($result);
    $em->flush();
}

function EditMessage($id, $message, $em)
{
    $query = $em->createQuery("SELECT b FROM Board b WHERE b.id = :id");
    $query->setParameter('id', $id);
    $result = $query->getSingleResult();
    $result->setMessage($message);
    $result->setUpdateTime(new DateTime());

    $em->flush();
}


