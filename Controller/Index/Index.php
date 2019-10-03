<?php
namespace Magenest\Movie\Controller\Index;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
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

        /**
       	         * When Magento get your model, it will generate a Factory class
      	         * for your model at var/generaton folder and we can get your
       	         * model by this way
               */
//        $newsModel = $this->_modelNewsFactory->create();
//     // Load the item with ID is 1
//        $item = $newsModel->load(1);
//        var_dump($item->getData());
//
//	        // Get news collection
//	        $newsCollection = $newsModel->getCollection();
//	        // Load all data of collection
//	        var_dump($newsCollection->getData());
        return $resultPage;
    }

}