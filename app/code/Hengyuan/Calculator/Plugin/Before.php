<?php

namespace Hengyuan\Calculator\Plugin;

/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 6/7/16
 * Time: 11:06 AM
 */
class Before
{
    public function beforeDivide($calculator,$x,$y)
    {
        echo 'hello from before plugin <br/>';
        return [5,10];
    }

}