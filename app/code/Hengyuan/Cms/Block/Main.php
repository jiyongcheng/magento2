<?php
namespace Hengyuan\Cms\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
        $this->setName($this->getRequest()->getParam('name'));
    }

    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }
}