<?php

namespace App\Servicse;

use TopClient\TopClient;

/**
 * Class TopManager
 * @package App\Servicse
 */
class TopManager
{


    protected $topclient;

    public function __construct($message, TopClient $c)
    {

        $this->topclient =$c;

    }

}


