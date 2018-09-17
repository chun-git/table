<?php
// bootstrap.php
require_once "../vendor/autoload.php";
require_once __DIR__.'/../src/entity/Student.php';
//require_once __DIR__.'/../src/entity/Teacher.php;
require_once __DIR__.'/../src/entity/Board.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/../src/entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '1234',
    'dbname'   => 'table',
    'charset'  => 'utf8',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);

//$qb = $em->createQueryBuilder();