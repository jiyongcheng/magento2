<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 6/7/16
 * Time: 11:09 AM
 */
require __DIR__ . '/app/bootstrap.php';
class TestApp extends \Magento\Framework\App\Http implements \Magento\Framework\AppInterface
{
    public function launch()
    {
        $calculator = $this->_objectManager->create('\Hengyuan\Calculator\Model\Basic');
        echo $calculator->divide(10,0);
        return $this->_response;
    }

    public function catchException(\Magento\Framework\App\Bootstrap $bootstrap, \Exception $exception)
    {
        return false;
    }
}

$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$app = $bootstrap->createApplication('TestApp');
$bootstrap->run($app);