<?php
require_once __DIR__."/../config/bootstrap.php";

//$idFind = $em->find('Student', 2);
//
//echo "Student Name : " . $idFind->getName()."\n";
//echo "TeacherId : " . $idFind->getTeacherId()."\n";

//$student = $em->getRepository('Student')->FindBy(array('source' => 80));

$config = "s.source >= 70 AND s.source <= 90";
$studentName = 's.name = :name AND s.id = :id';
$q = $em->createQuery("SELECT s FROM Student s WHERE $studentName");
$q->setParameters(array(
    'name' => 'ace',
    'id' => 10,
));
//$q->setParameter('name','alice');
$result = $q->getResult();
var_dump($result);


