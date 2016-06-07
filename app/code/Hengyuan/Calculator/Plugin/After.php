<?php

namespace Hengyuan\Calculator\Plugin;
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 6/7/16
 * Time: 11:06 AM
 */
class After
{

    public function afterDivide($calculator,$result)
    {
        echo 'The result is:'.$result;
    }
}