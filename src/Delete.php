<?php
require_once __DIR__."/../config/bootstrap.php";

$name = 'ace';
$q = $em->createQuery("SELECT s FROM Student s ");
$test = $q->getArrayResult();
var_dump($test);

// $q->setParameters(array(
//    'name' => 'ace',
//    'id' => 10,
// ));
// $q->setParameter('name','alice');
// echo "$test[1]" . "/n";
// var_dump($test);

//$em->remove($test)->getId();
//$em->flush();
