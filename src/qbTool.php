<?php
require_once __DIR__."/../config/bootstrap.php";

// example1: creating a QueryBuilder instance
$qb = $em->createQueryBuilder();
//var_dump($em);

// $qb instanceof QueryBuilder
$qb->select('COUNT(s.name),s.name')
    ->from('Student', 's')
    ->groupBy('s.name');
// $params = $qb->setParameter('id','1');
var_dump($qb->getQuery()->getResult());


echo '====================================='."\n";
// DQL
//$em->getRepository('Student')->find(1);
// var_dump($em->getRepository('Student')->find(1));
$query = $em->createQuery('SELECT COUNT(s.name),s.name FROM Student s GROUP BY s.name  ');
//$query->setParameter('name', '');
$userTest = $query->getResult();
var_dump($userTest);


