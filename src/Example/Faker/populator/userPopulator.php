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

//TODO doctrine error "It's a requirement to specify a Metadata Driver and pass it to Doctrine\ORM\Configuration::setMetadataDriverImpl()"

$entityManager = \Doctrine\ORM\EntityManager::create($conf, $configuration);

$populator = new Faker\ORM\Doctrine\Populator($faker, $entityManager);