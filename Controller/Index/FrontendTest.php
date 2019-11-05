<?php
namespace Magenest\Movie\Controller\Index;
use Magento\Framework\App\Action\Context;

class FrontendTest extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
//    protected $_modelNewsFactory;
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
//        $this->_modelNewsFactory = $modelNewsFactory;
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
    }

}