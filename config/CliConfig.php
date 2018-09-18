<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'Bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
// $entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($em);
