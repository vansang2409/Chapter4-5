<?php
namespace Magenest\Movie\Controller\Adminhtml\Component;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Newmovie extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addBreadcrumb(__('Addmovie'), __('Addmovie'));
        $resultPage->getConfig()->getTitle()->prepend(__('Addmovie'));
        return $resultPage;
    }
//    protected function _isAllowed()
//    {
//        return $this->_authorization->isAllowed('Magenest_Movie::movie');
//    }
}