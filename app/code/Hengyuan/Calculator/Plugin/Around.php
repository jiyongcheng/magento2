<?php

namespace Hengyuan\Calculator\Plugin;
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 6/7/16
 * Time: 11:06 AM
 */
class Around
{

    public function aroundDivide($calculator,$divide,$x,$y)
    {
        if($y==0) {
            return 'unable to divide by 0';
        }
        $result = $divide($x,$y);
        return 'Tthe result is:'.$result;
    }
}