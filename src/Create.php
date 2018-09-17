<?php
// user_create.php <name>
require_once __DIR__."/../config/bootstrap.php";

//$count = $em->createQuery("SELECT u.name FROM user u WHERE u.name = '$id'");
//$count->setParameter('id', $id);
//$test = $count->getResult();
$newStudentName = $argv[1];
//var_dump($test);
$teacherId = '1';
$source = $argv[2];

$student = new Student($newStudentName, $teacherId);
$student->setName($newStudentName);
$student->setSource($source);

$em->persist($student);
$em->flush();

echo "Created St. with ID " . $student->getId($student) . "\n";
echo "Created Te. with ID " . $student->getId($teacherId) . "\n";

$uowSize = $em->getUnitOfWork()->size();
echo "$uowSize" . "\n";

