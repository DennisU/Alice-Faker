<?php

$faker = \Faker\Factory::create();

$entityManager = new \Doctrine\ORM\EntityManager();

$populator = new Faker\ORM\Doctrine\Populator($faker, $entityManager);