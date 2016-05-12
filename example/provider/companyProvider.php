<?php

/**
 * Created by PhpStorm.
 * User: dennis-ungelbach
 * Date: 12.05.16
 * Time: 18:48
 */
class companyProvider extends \Faker\Provider\Base
{
    public function company()
    {
            $company = array("IBM", "Microsoft", "Apple", "Sony");
        
            return static::randomElement($company);
    }
}