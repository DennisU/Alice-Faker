<?php

include_once '../../../../vendor/autoload.php';

$faker = \Faker\Factory::create();

$configuration = new \Doctrine\ORM\Configuration();

$conf = array(
    "default" => "",
    "dbname" =>  "",
    "host" =>   "localhost",
    "port:" => "",
    "user" =>  "root",
    "password" =>  "~",
    "charset" => "~",
    "path" => "~",
    "memory" => "~"
);

$entityManager = \Doctrine\ORM\EntityManager::create($conf, $configuration);

$populator = new Faker\ORM\Doctrine\Populator($faker, $entityManager);