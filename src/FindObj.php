<?php
require_once __DIR__."/../config/bootstrap.php";

//$idFind = $em->find('Student', 2);
//
//echo "Student Name : " . $idFind->getName()."\n";
//echo "TeacherId : " . $idFind->getTeacherId()."\n";

//$student = $em->getRepository('Student')->FindBy(array('source' => 80));

//$config = "s.source >= 70 AND s.source <= 90";
//$studentName = 's.name = :name AND s.id = :id';
//$q = $em->createQuery("SELECT s FROM Student s WHERE $studentName");
//$q->setParameters(array(
//    'name' => 'ace',
//    'id' => 10,
//));
////$q->setParameter('name','alice');
//$result = $q->getResult();
//var_dump($result);

//$query1 = $em->createQueryBuilder();
//$query1->select('b');
//$query1->from('Board','b');
//$query1->where('b.id = :id');
//$query1->setParameter('id','7');
//$query1->getQuery()->getResult();
//$result = $query1->getQuery()->getResult();
//var_dump($result);


$result1 = $em->getRepository('board')->findOneBy(['id'=>[7]]);
$result1->setMessage(123);
var_dump($result1);
$result2 = $em->getRepository('board')->findOneBy(['id'=>[8]]);
$result2->setMessage(123);
var_dump($result2);
$result3 = $em->getRepository('board')->findOneBy(['id'=>[9]]);
$result3->setMessage(123);
var_dump($result3);

$em->flush();

