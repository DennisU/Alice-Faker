<?php

/**
 * Created by PhpStorm.
 * User: dennis-ungelbach
 * Date: 12.05.16
 * Time: 18:04
 */
class myProvider extends \Faker\Provider\Base
{
    public function itCompany() {
        $company = array("Flagbit", "Apple", "Microsoft", "IBM");

        return static::randomElement($company);
    }
}