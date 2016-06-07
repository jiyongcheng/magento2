<?php

/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 6/7/16
 * Time: 2:20 PM
 */
namespace Hengyuan\CmsPlugin\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        return parent::execute();
    }

    public function beforeExecute()
    {
        echo 'before execute';
    }

    public function afterExecute($page,$result)
    {
        echo 'after execute';
        //current controller
        return $result;
    }



}