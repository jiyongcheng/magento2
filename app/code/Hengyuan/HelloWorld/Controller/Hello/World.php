<?php
namespace Hengyuan\HelloWorld\Controller\Hello;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class World extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(Context $context)
    {
        return parent::__construct($context);
    }
    public function execute()
    {
        $this->pageFactory = $this->_objectManager->get('Magento\Framework\View\Result\PageFactory');
        $page_object =  $this->pageFactory->create();
        return $page_object;
    }
}